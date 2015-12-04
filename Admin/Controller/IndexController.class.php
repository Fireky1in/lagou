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
*后台首页, 后台用户密码修改
*/

namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
       $this->display();
    }

    //显示修改密码界面
	public function updatepwd(){
		$this->display();
	}

    //修改登录用户的密码
    	//只有登录之后,才能修改当前的用户
	public function doEditPwd(){
		$data = I();
		$data['password'] = md5($data['password']);
		//获取当前登录用户的id
		$data['id'] = session('admin')['id'];
		//更新数据
		$result = M('admin')->save($data);
		//对结果返回
		if($result){
			$res['msg'] = '更新成功';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '更新失败';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}
}