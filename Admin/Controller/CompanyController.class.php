<?php
// +----------------------------------------------------------------------
// | [ You have to believe in youself,That's the secret of success]
// +----------------------------------------------------------------------
// | Author: Five over：刘鹏 <lampse@sina.com>
// +----------------------------------------------------------------------
// | Date:2015-11-08
// +----------------------------------------------------------------------
/**
*@version
*
*/ 
namespace Admin\Controller;
use Think\Controller;
class CompanyController extends BaseController {
	public function index()
	{
		//初始化参数
		$where = '';
		//接收搜索框传值
		$username = I('get.username');
		//如果不为空则设置查询条件
		if(!empty($username)){
			$where['name'] = array('like','%'.$username.'%');
		}
		//创建连接数据库对象
		$user = M('company');
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

	public function deny()
	{
		//接收传值
		$id = I('id');
		//赋值给数组
		$data['id'] = $id;
		$data['state'] = 0;
		//创建对象
		$user = M('company');
		// $where['username'] = array('id='.$id);
		//执行
		$re = $user->save($data);
		//判断
		if($re){
			$res['msg'] = '禁用成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '禁用失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}

	public function allow()
	{
		//接收传值
		$id = I('id');
		//赋值给数组
		$data['id'] = $id;
		$data['state'] = 2;
		//创建数据库操作对象
		$user = M('company');
		// $where['username'] = array('id='.$id);
		//执行
		$re = $user->save($data);
		//判断
		if($re){
			$res['msg'] = '启用成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '启用失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}

	public function apply()
	{
		$where['state'] = 3;
		//创建对象
		$user = M('company');
		//统计总记录数
		$count = $user->count($where);
		//创建分页对象
		$pages = new \Think\Page($count,10);
		//获取页码
		$page = $pages->show();
		//获取limit参数
		$limit = $pages->firstRow.','.$pages->listRows;
		//读数据
		$users = $user->limit($limit)->where($where)->select();
		//分配变量
		$this->assign('users',$users);
		$this->assign('page',$page);
		//解析模版
		$this->display();
	}

	public function check()
	{
		//接收传值
		$id = I('id');
		//赋值给数组
		$data['id'] = $id;
		$data['state'] = 1;
		//创建对象
		$user = M('company');
		// $where['username'] = array('id='.$id);
		//执行
		$re = $user->save($data);
		//判断
		if($re){
			$res['msg'] = '认证成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '认证失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}

	
}