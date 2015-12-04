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
*	登录成功后直接跳到用户资料的完善
*/
namespace Home\Controller;
use Think\Controller;
class RegoverController extends Controller {
	public function index(){
		$this->display();
	}
	public function emailReg(){
		echo '快去邮箱验证把';
	}
}