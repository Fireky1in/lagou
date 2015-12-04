<?php
// +----------------------------------------------------------------------
// | [ You have to believe in youself,That's the secret of success]
// +----------------------------------------------------------------------
// | Author: Five over：刘鹏 <lampse@sina.com>
// +----------------------------------------------------------------------
// | Date:2015-11-09
// +----------------------------------------------------------------------
/**
*@version
*
*/
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends BaseController {
	//显示添加页面
	public function add()
	{	
		$this->display();
	}
	//插入数据
	public function insert()
	{
		//创建对象
		$user = M('admin');
		//注册时间
		$_POST['create_time'] = time();
		//密码加密
		$_POST['password'] = md5($_POST['password']);
		//创建数据
		$user->create();
		//执行添加
		$re = $user->add();
		if($re){
			$res['msg'] = '添加成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '添加失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}
	//显示页面 查询显示数据
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
		$user = M('admin');
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
		//解析模板
		$this->display();
	}
	//删除数据
	public function del()
	{
		//接收传值
		$id = I('get.user_id');
		//创建数据操作对象
		$user = M('admin');
		//删除
		$users = $user->where('id='.$id)->delete();
		if($users){
			$res['msg'] = '删除成功！';
			$res['code'] = 1;
			$this->ajaxReturn($res);
		}else{
			$res['msg'] = '删除失败！';
			$res['code'] = 0;
			$this->ajaxReturn($res);
		}
	}

	public function edit()
	{
		//接收传值
		$id = I('get.user_id');
		//创建对象
		$user = M('admin');
		//查询
		$users = $user->where('id='.$id)->select();
		//分配变量
		$this->assign('users',$users);
		//解析模板
		$this->display();
	}

	//修改资料
	public function doEdit()
	{
		//接收传值
		$data = I();
		//创建对象
		$user = M('admin');
		//判断值 如果存在则使用存在的值 否则使用0
		$data['status'] = isset($data['status']) ? $data['status'] : 0;
		//var_dump(I('post.status'));die;
		// $where['username'] = array('id='.$id);
		// $user->create();
		//执行
		$re = $user->save($data);
		//判断
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