<?php
// +----------------------------------------------------------------------
// | [ You have to believe in youself,That's the secret of success]
// +----------------------------------------------------------------------
// | Author: Five over：刘鹏 <lampse@sina.com>
// +----------------------------------------------------------------------
// | Date:
// +----------------------------------------------------------------------
/**
*@version
*
*/
namespace Admin\Controller;
use Think\Controller;
class UserController extends BaseController {
	public function updatepwd(){
		$this->display();
	}
	//列表显示
	public function index()
	{
		//初始化参数
		$where = '';
		//接收搜索框传值
		$username = I('get.username');
		//如果不为空则设置查询条件
		if(!empty($username)){
			$where['username'] = array('like','%'.$username.'%');
		}
		//创建连接数据库对象
		$user = M('users');
		//统计总记录数
		$count = $user->where($where)->count();
		//创建分页对象
		$pages = new \Think\Page($count,10);
		//获取页码
		$page = $pages->show();
		//获取limit参数
		$limit = $pages->firstRow.','.$pages->listRows;
		//读数据
		$users = $user->limit($limit)->where($where)->order('id ASC')->select();
		//分配变量
		$this->assign('users',$users);
		$this->assign('page',$page);
		$this->assign('username',$username);
		//解析模版
		$this->display();
	}

	//修改用户
	public function edit()
	{
		//接收传值
		$id = I('get.id');
		//创建对象
		$user = M('users');
		//查询
		$users = $user->where('id='.$id)->select();
		//分配变量
		$this->assign('users',$users);
		//解析模板
		$this->display();
	}

	//禁用用户
	public function deny()
	{
		//接收传值
		$id = I('get.id');
		//创建对象
		$user = M('users');
		//查询
		$users = $user->where('id='.$id)->select();
		//分配变量
		$this->assign('users',$users);
		//解析模板
		$this->display();
	}

	//修改用户类型和状态
	public function doEdit()
	{
		//接收传值
		$data = I();
		$user = M('users');
		// $where['username'] = array('id='.$id);
		$user->create();
		$re = $user->save();
		if($re){
			$res['msg'] = '修改成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '修改失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}



	
}