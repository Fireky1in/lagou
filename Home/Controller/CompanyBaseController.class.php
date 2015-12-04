<?php
//+---------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
//+---------------------------------------------------------------------
// | Team:Five Over
//+---------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
//+---------------------------------------------------------------------
// | Date :2015.11.10
//+---------------------------------------------------------------------
/**
*@version
*
*/
namespace Home\Controller;
use Think\Controller;

class CompanyBaseController extends Controller {
	
	public $uid = null;
	public $comObj = null;

	public function __construct()
	{
		parent::__construct();

		if (!session('?user')) {
			$this->redirect('Home/login');
		}
		$this->id = session('user.id');
        $_SESSION['user']['type'] = 2;
		$this->comObj = D('Company');
		$data['id'] = $this->id;
		$result = $this->comObj->where($data)->find();
		// 如果用户未注册企业用户 或者 注册企业用户后未进行邮箱验证 或者 未填写公司基本信息 
		if (!$result || $result['state'] == -1 || $result['step'] == 4) {
			$this->redirect('Home/CompanyRegOpen/bindstep');
		}
	}
}