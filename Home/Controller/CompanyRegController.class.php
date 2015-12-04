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
*注册企业用户
*/
namespace Home\Controller;
use Think\Controller;
class CompanyRegController extends Controller{
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
	public function step()
	{
		$data['id'] = $this->id;
		$result = $this->comObj->where($data)->find();
		$step = $result['step'];
		if ($result['step'] < 4)
		{
			$this->redirect('Home/CompanyRegOpen/bindstep');
		}

		// 地址中有update标识时执行
		$arr = I('get.update');
		if ($arr == 1) {
			$step = 1;
		}

		switch($step) {
			case 4 :
				$this->_step1();
				break;
			default :
				$this->redirect('Home/Company/index');
				break;
		}
	}

	private function _step1()
	{
		$tradeObj = D('Trade');
		$data['id'] = $this->id;
		$res = $this->comObj->where($data)->find();

		// 判断用户是否已完成公司注册 未完成则跳到注册步骤
		if (!in_array($res['state'], array(1, 2))) {
			$this->redirect('Home/CompanyRegOpen/bindstep');
		}

		$result = $tradeObj->select();
		$this->assign('company', $res);
		$this->assign('trade', $result);
		$this->display('step1');
	}

	// 接收公司基本信息的数据
	public function step1()
	{	
		$data = I();
		// var_dump($data);die;
		$company['id'] = $this->id;
		$company['short_name'] = $data['short_name'];
		$company['web'] = $data['web'];
		$company['city'] = $data['city'];
		$arrScale = array_flip(C('company_scale'));
		$company['scale'] = $arrScale[$data['scale']];
		$arrStage = array_flip(C('company_stage'));
		$company['stage'] = $arrStage[$data['stage']];
		$company['one_desc'] = $data['one_desc'];
		$company['logo'] = $data['logo'];
		$company['step'] = 5; //步骤:已到最大值
		$company['trade'] = $data['trade'];

		$result = $this->comObj->save($company);

		$msg['code'] = 1;
		$msg['msg'] = '成功';
		$msg['url'] = U('Home/CompanyReg/step2');
		$this->ajaxReturn($msg);

	}
	public function step2()
	{
		$this->_check();

		if (IS_POST) {
			$data = I();
			$tagObj = D('Tag');
			$comTagObj = D('CompanyTag');
			$tagArr = $tagObj->select();
			$nameArr = array();

			foreach ($tagArr as $v) {
				$nameArr[$v['id']] = $v['name'];
			}

			$arr = explode(',', $data['labels']);

			foreach ($arr as $val) {
				if (!in_array($val, $nameArr)) {
					$result = $tagObj->add(array('name'=>$val));
					$comTag['company_id'] = $this->id;
					$comTag['tag_id'] = $result;
					$comTagObj->add($comTag);
				} else {
					$res = $tagObj->where('name = "'.$val.'"')->find();
					$comTag['company_id'] = $this->id;
					$comTag['tag_id'] = $res['id'];
					$comTagObj->add($comTag);
				}
			}

			$msg['code'] = 1;
			$msg['url'] = U('Home/CompanyReg/step3');
			$this->ajaxReturn($msg);
			
		} else {
			$tagObj = D('Tag');
			$tag1 = $tagObj->where('type = 1')->select();
			$tag2 = $tagObj->where('type = 2')->select();
			$tag3 = $tagObj->where('type = 3')->select();
			$tag4 = $tagObj->where('type = 4')->select();


			$this->assign('tag1', $tag1);
			$this->assign('tag2', $tag2);
			$this->assign('tag3', $tag3);
			$this->assign('tag4', $tag4);

			$this->display();
		}
	}

	// 公司创建团队
	public function step3()
	{
		$this->_check();
		
		if (IS_POST) {
			$data = I();
			$data = array_filter($data);
			if (!empty($data)) {
				$teamObj = D('Team');
				foreach ($data['leaderInfos'] as $val) {
					$val = array_filter($val);
					if (!empty($val)) {
						$val['company_id'] = $this->id;
						$result = $teamObj->add($val);
					}
				}
			}

			$msg['code'] =1;
			$msg['msg'] = '成功';
			$msg['url'] = U('Home/CompanyReg/step4');
			$this->ajaxReturn($msg);
			
		} else {


			$this->display();
		}
	}

	// 公司产品
	public function step4()
	{
		$this->_check();

		if (IS_POST) {
			$data = I();
			$data = array_filter($data);
			if (!empty($data)) {
				$productObj = D('Product');
				foreach ($data['productInfos'] as $val) {
					$val = array_filter($val);
					if (!empty($val)) {
						$val['company_id'] = $this->id;
						$result = $productObj->add($val);
					}
				}
			}
			
			$msg['code'] =1;
			$msg['msg'] = '成功';
			$msg['url'] = U('Home/CompanyReg/step5');
			$this->ajaxReturn($msg);
		} else {


			$this->display();
		}
	}

	// 公司介绍
	public function step5()
	{
		$this->_check();

		if (IS_POST) {
			$data = I();
			$data['id'] = $this->id;
			$this->comObj->save($data);

			$msg['code'] = 1;
			$msg['msg'] = '成功';
			$msg['url'] = U('Home/CompanyReg/success');

			$this->ajaxReturn($msg);
			
		} else {


			$this->display();
		}
	}

	private function _check()
	{
		$data['id'] = $this->id;
		$result = $this->comObj->where($data)->find();

		if ($result['step'] < 5)
		{
			$this->redirect('Home/CompanyReg/step');
		}
	}

}