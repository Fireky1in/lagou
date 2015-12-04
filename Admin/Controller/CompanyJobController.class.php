<?php
// +----------------------------------------------------------------------
// | [ You have to believe in youself,That's the secret of success]
// +----------------------------------------------------------------------
// | Author: Five over：刘鹏 <lampse@sina.com>
// +----------------------------------------------------------------------
// | Date:2015-11-06
// +----------------------------------------------------------------------
/**
*@version
*
*/
namespace Admin\Controller;
use Think\Controller;
class CompanyJobController extends BaseController {
	public function index()
	{
		//初始化参数
		$where = '';
		//接收参数 公司ID
		$id = I('get.id');
		$where['company_id'] = $id;
		//创建连接数据库对象
		$user = M('job');
		//统计总记录数
		$count = $user->where($where)->count();
		//创建分页对象
		$pages = new \Think\Page($count,10);
		//获取页码
		$page = $pages->show();
		//获取limit参数
		$limit = $pages->firstRow.','.$pages->listRows;
		//读数据
		$users = $user->limit($limit)->where($where)->order('lg_job.id ASC')->select();
		//分配变量
		$this->assign('users',$users);
		$this->assign('page',$page);
		$this->assign('username',$username);
		//解析模版
		$this->display();
	}
	//禁用
	public function deny()
	{
		//接收传值
		$id= I('jid');
		$data['id'] = $id;
		$data['state'] = 0;
		$user = M('job');
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
	//启用
	public function allow()
	{
		//接收传值
		$id= I('jid');
		$data['id'] = $id;
		$data['state'] = 1;
		$user = M('job');
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
}