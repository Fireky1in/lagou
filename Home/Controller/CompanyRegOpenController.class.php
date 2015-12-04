<?php
//+---------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
//+---------------------------------------------------------------------
// | Team:Five Over
//+---------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
//+---------------------------------------------------------------------
// | Date :2015.11.09
//+---------------------------------------------------------------------
/**
*@version
*验证企业用户
*/
namespace Home\Controller;
use Think\Controller;

class CompanyRegOpenController extends Controller {

	public $id = null;
	public $comObj = null;

	public function __construct()
	{
		parent::__construct();
		if (!session('?user')) {
			$this->error('请先登录', U('Home/Index/index'));
		}
		$this->id = session('user.id');
		$this->comObj = D('Company');
	}

	// 公司注册步骤判断
	public function bindstep()
	{
		$data['id'] = $this->id;
		$result = $this->comObj->where($data)->find();
		$step = $result['step'] ? $result['step'] : 1;

		// 地址中有update标识时执行
		$arr = I('get.update');
		if ($arr == 1) {
			$step = 1;
		}

		switch($step) {
			case 1 :
				$this->_bindstep1();
				break;
			case 2 :
				$this->_bindstep2();
				break;
			case 3:
				$this->_bindstep3();
				break;
			case 4:
				$this->_bindstep4();
				break;	
			default :
				$this->redirect('Home/Company/index');
				break;
		}
	}

	// 公司注册第一步页面显示
	private function _bindstep1()
	{
		$data['id'] = $this->id;  
		$arr = $this->comObj->where($data)->find();
		$this->assign('arr', $arr);
		$this->display('bindstep1');
	}

	
	// 接收第一步提交过来的数据
	public function bindstep1()
	{
		if (IS_POST) {
			$data = I();
			if (empty($data['tel']) && empty($data['email'])) {
 				$msg['code'] = -3;
 				$msg['msg1'] = '电话不能为空';
 				$msg['msg2'] = '邮箱不能为空';
 				$this->ajaxReturn($msg);
 			}
			if (empty($data['tel'])) {
				$msg['code'] = -1;
				$msg['msg'] = '电话不能为空';
				$this->ajaxReturn($msg);
 			}
 			if (empty($data['email'])) {
 				$msg['code'] = -2;
 				$msg['msg'] = '邮箱不能为空';
 				$this->ajaxReturn($msg);
 			}
 			
			$data['id'] = $this->id;
			$data['step'] = 2;		// 步骤
			$data['state'] = -1; 	// 未验证状态

			$arr['id'] = $data['id'];

			$res = $this->comObj->where($arr)->find();
			

			if ($res) {
				$this->comObj->save($data);
				$result = 1;
			} else {
				$result = $this->comObj->add($data);
			}


			if ($result) {
				$msg['code'] = 1;
				$msg['msg'] = '添加成功';
				$msg['url'] = U('Home/CompanyRegOpen/bindstep', array('id'=>2));

			} else {
				$msg['code'] = 0;
				$msg['msg'] = '添加失败,请重新尝试';
			}

			$this->ajaxReturn($msg);
		}
	}

	// 公司注册第2步
	private function _bindstep2()
	{
		$data['id'] = $this->id;
		$info = $this->comObj->where($data)->find();

		$this->assign('info', $info);
		$this->display('bindstep2');
	}

	// 获取第二步提交过来的数据
	public function bindstep2()
	{
		$data = I();
		if (empty($data['name'])) {
			$msg['code'] = -1;
			$msg['msg'] = '公司名不能为空';
			$this->ajaxReturn($msg);
		}
		$data['id'] = array('neq', $this->id);
		$result = $this->comObj->where($data)->find();

		if ($result) {
			$msg['code'] = 0;
			$msg['msg'] = '该公司已存在';

		} else {
			$data['step'] = 3;
			$data['id'] = $this->id;
			$res = $this->comObj->save($data);
			$msg['code'] = 1;
			$msg['msg'] = '第二步成功';
			$msg['url'] = U('Home/CompanyRegOpen/bindstep');
		}

		$this->ajaxReturn($msg);
	}

	// 公司注册第三步
	private function _bindstep3()
	{
		$data['id'] = $this->id;
		$res = $this->comObj->where($data)->find();
		$this->sendMail($res);
		$this->assign('data', $res);
		$this->display('bindstep3');
	}

	private function _bindstep4()
	{
		$this->redirect('Home/CompanyReg/step1');
	}

	// 发送邮箱
	public function sendMail($res = Null)
	{
		$url = C('DOMAIN').U('Home/CompanyRegOpen/active', array('id'=>$this->id));
		$msg =<<<HTML
			<h1>感谢您注册拉勾网,请<a href="$url">点击激活</a>账号.</h1>
			<div>$url</div>
HTML;
		$project = '企业邮箱激活 - 拉勾网';

		// 判断是否是ajax提交
		if(IS_AJAX) {
			$email = I('post.email');
			sendMail($email, $msg, $project);
			$this->ajaxReturn(array('code'=>1, 'msg'=>'发送成功'));
		} else {

			sendMail($res['email'], $msg, $project);
		}
	}

	// 接收激活邮箱
	public function active()
	{
		$id = I('get.id');
		$data['id'] = $id;
		$data['state'] = 2;		// 已通过邮箱验证,但还未验证的用户
		$data['step'] = 4;		// 步骤:填写公司信息
		$this->comObj->save($data);

		$user['id'] = $id;
		$user['type'] = 2;		// 更改用户状态为企业
		$userObj = D('Users');
		$userObj->save($user);

		$this->redirect('Home/CompanyReg/step');
	}

	public function success()
	{
		$this->_check();

		$this->display();
	}

}

