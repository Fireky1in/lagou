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
*
*/
namespace Home\Controller;
use Think\Controller;
class JobController extends Controller {
	public function jobList(){
		$cate_id = I('get.cateid').'?';
		$data['level'] = I('get.level');
		$cate_id = strstr($cate_id,'?',true);
		$data['cate_id'] = $cate_id;
		var_dump($data);
		$job = M('job')->select();
		$this->display('index');
	}
}