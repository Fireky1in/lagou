<?php
// +----------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
// +----------------------------------------------------------------------
// | Author: 青铜六：陈仁焕 <sign0318@126.com>
// +----------------------------------------------------------------------
// | Date
// +----------------------------------------------------------------------
/**
*@version
*
*/
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		// var_dump($_POST);
		$this->display();
	}
	

	public function doLogin(){
		$verify = I('param.verify','');
		if(!check_verify($verify)){
			$this->error("亲，验证码输错了哦！",$this->site_url,3);
		}

		// var_dump($_POST);die;
		//如果没有接收到post数据
		if(!IS_POST){
			E('页面不存在', 404);
		}
		$wget = I();//接受变量,谁标签过滤
		$admin = M('admin');
		$data['username'] = $wget['username'];
		$data['password'] = md5($wget['password']);
		$res = $admin->where($data)->find();
		if(!$res){//此处验证密码
			$this->error('用户名或密码错误',U('Admin/Login/login'),3);
		}
		//如果没有被禁用,则将登录ip和登录时间获取后更新
		if($res['status'] == 1){
			//设置时区
			date_default_timezone_set('PRC');
			//接收登录ip和登录时间
			$loger['login_time'] = time();
			$loger['login_ip'] = $_SERVER['REMOTE_ADDR'];
			$loger['id'] = $res['id'];
			//更新
			$admin->save($loger);
			//写入session
			session('admin',$res);
			$this->success('登录成功',U('Admin/Index/index'),3);
		}else if($res['status'] == 0){
			$this->error('您的账户已被禁用!',U('Admin/Login/login'),3);
		}
	}


	//注销
	public function logout(){
		session('admin', null);
		$this->success('注销成功',U('Admin/Login/login'),3);
	}

	public function index(){
		$this->display('login');
	}
	public function verify(){ 
		ob_clean();
		$Verify =    new \Think\Verify();// 开启验证码背景图片功能 随机使用 
		$Verify->length   = 4;
		$Verify->entry();
	}

}