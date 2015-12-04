<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends BaseController {
	public function index(){
		//调用基本类的职位分类
		$cates = $this->getcate();
		$this->assign('cates',$cates);

		//查询出没有子类的分组,没有子类才能删除
		$cate = M('job_category');
		$info = $cate->query('select id from lg_job_category where id in (select pid from lg_job_category)');
		
		$user = M('job_category');
		$user = $user->select();

		$this->assign('user',$user);
		$this->assign('info',$info);
		$this->display();
	}


	//后台分类添加展示
	public function add(){
		$cates = $this->getcate();
		$this->assign('cates',$cates);
		$this->display();
	}

	//分类添加
	public function insert()
	{
		
		//首先判断AJAX是否是通过POST方式提交
		if (IS_POST) {
			$data = I('post.');
		//查找父级分类
			$parent = M('job_category')->where('id='.$data['pid'])->find();
		//拼接path字段(他父级的path加上他的pid)	
			$data['path'] = $parent['path'].'_'.$data['pid'];

		//执行添加操作	
			$rs = M('job_category')->add($data);
			if ($rs) {
				$msg['code'] = 1;
				$msg['msg'] = '添加成功';
			}else {
				$msg['code'] = 0;
				$msg['msg'] = '添加失败';
			}
			$this->ajaxReturn($msg);
		}	
	}

//--------------------------------------------------------------------------------
	//分类更新页展示
	public function edit()
	{	
		//获取操作id
		$id = I('id');
		//获取父类的pid
		$pid = I('pid');
		$cates = $this->getcate();
		//查找父级分类
		$res = M('job_category')->find($pid);
		//查找修改的子类本身
		$info = M('job_category')->where('id='.$id)->find();
		//
		$this->assign('info',$info);
		$this->assign('pid',$res);
		$this->assign('cates',$cates);
		$this->display();
	}


	//分类更新
	public function update()
	{
		if (IS_POST) {
			$data = I();
			$rs = M('job_category')->save($data);
			if($rs){
				$msg['code'] = 1;
				$msg['msg'] = 'oh`Yes~更新成功';
				return $this->ajaxReturn($msg);
			}else{
				$msg['code'] = 0;
				$msg['msg'] = 'oh`NO~更新失败';
				return $this->ajaxReturn($msg);
			}
		}
	}
//------------------------------------------------------------------------------
	//分类删除页展示
	public function delete()
	{

		$id = I();
		$cate = M('job_category')->where('id='.$id['id'])->find();
		// var_dump($cate);die;
		$this->assign('info',$cate);
		$this->display();
	}
	//分类删除
	public function nset()
	{

		if(IS_POST){
			//接收要删除的id值,通过id删除
			$info = I();
			$data = $info['id'];
			$rs = M('job_category')->delete($data);
			if($rs){
				$msg['code'] = 1;
				$msg['msg'] = '删除成功';
				return $this->ajaxReturn($msg);
			}else{
				$msg['code'] = 0;
				$msg['msg'] = '删除失败';
				return $this->ajaxReturn($msg);
			}
		}	
		
	}

}