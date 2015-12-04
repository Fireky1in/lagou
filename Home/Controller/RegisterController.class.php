<?php
// +----------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
// +----------------------------------------------------------------------
// | team:Five Over 
// +----------------------------------------------------------------------
// | Author:陈仁焕 <sign0318@126.com>
// +----------------------------------------------------------------------
// | Date
// +----------------------------------------------------------------------
/**
*类介绍
*用户注册
*/
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	public function index(){
		$this->display('register');
	}
	//注册
	public function register(){
		$this->display();
	}

	//用户检测
	public function telRegister(){
		//接收值
		$data['username'] = I('post.username');

		//到数据库查询,该用户名是否已经注册

		$res = M('users')->where($data)->find();
		if($res){//若存在返回0
			$this->ajaxReturn(0);
		}else{//不存在,返回1
			$this->ajaxReturn(1);
		}
		// $this->ajaxReturn($data['username']);
	}

	//短信验证码
	public function telCode(){
		//手机号码
		$tel = I('post.phone');

		//发送验证码
		$telcode = rand(100000,999999);

		$res = sendMessage($tel,$telcode);

		//存入session中
		if($res){
			session('telcode',$telcode);
			//将telcode返回到js
			$this->ajaxReturn($telcode);
		}	
	}

	public function emailcode(){
		$ht = '<a href="http://www.our.com">点击验证</a>';
		sendRegMail('sign0318@126.com',$ht,'our');
	}

	//用户注册
	public function doRegister(){
		//接收值 和值得 处理
		//判断是邮箱注册还是手机号注册

		//telsub是手机号注册的按钮
		$ee = isset($_POST['telsub']);
		$_P = I();
		if($ee){
			//手机号码注册成功跳转到完善信息
			//直接登录,跳到简历完善
			$url = U('Home/Index/index');
			$msg = '注册成功,完善您的信息';
			$data['username'] = $_P['tel'];
			$data['password'] = md5($_P['password']);
			// $data['verify'] = $data['phonecode'];
			$data['type'] = $_P['usertype'];
		}else{
			//邮箱注册成功跳转到 邮箱验证页面
			$url = U('Home/Regover/emailReg');
			$msg = '验证邮箱，完成注册';
			$data['username'] = $_P['email'];
			$data['password'] = md5($_P['epassword']);
			$data['type'] = $_P['emailtype'];
		}
		
		$data['create_time'] = time();
		//插入
		$user = M('users');
		$res = $user->add($data);
		if($res){
			// 写入当前注册用户的id
			session('regId',$res);
			session('user',$data);
			//注册成功跳转到相应的处理页面
			$this->success($msg,$url,0);
		}else{
			//注册失败,跳回首页
			$this->success('注册失败',__APP__,0);
		}
	}
}