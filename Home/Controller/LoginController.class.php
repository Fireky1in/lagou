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
*		//前台登录 注销
*/
namespace Home\Controller;
use Think\Controller;
class LoginController extends BaseController {
	//显示登录页面
	public function login(){
		$this->display();
	}

	//前台通过ajax发起登录
	public function doLogin(){
		//接受参数
		$data = I();
		$data['password'] = md5($data['password']);
		//查询数据库
		$userres = M('users')->where($data)->find();
		//如果存在,写入session ,返回session数组
		if($userres){
			//写入session
			session('user',$userres);
            
			//返回成功信息
			$msg['code'] = 1;//添加标识
			$msg['username'] = $userres['username'];
			$this->ajaxReturn($msg);
		}else{
			$msg['code'] = 0;//添加标识
			$this->ajaxReturn($msg);
		}
	}

	//顶端的登录
	public function topLogin(){
		$this->display();
	}
	public function doTopLogin(){
		$data['username'] = I('post.email');
		$data['password'] = I('post.password');
		$data['password'] = md5($data['password']);
		//查询数据库
		$userres = M('users')->where($data)->find();
		//如果存在,写入session ,返回session数组
		if($userres){
			//写入session
			session('user',$userres);
			//返回成功信息
			jump('登陆成功',__APP__);
		}else{
			jump('用户名或密码错误',__APP__);
		}
	}


	//注销
	public function logout(){
		session('user',null);
	}
}