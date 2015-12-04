<?php
// +----------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
// +----------------------------------------------------------------------
// | Team:Five Over
// +----------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
// +----------------------------------------------------------------------
// | Date :2015.11.04
// +----------------------------------------------------------------------
/**
*@version
*公司列表展示
*/
namespace Home\Controller;
use Think\Controller;
class CompanyController extends BaseController {
	//公司列表展示
    public function index(){
  	//创建数据库操作对象
		$list = M('company');
    $jobs = M('job');
		//创建查询职位标签
		$trade = M('trade');
		//读取标签
		$trades = $trade->limit(0,5)->select();

		$tradesAll = $trade->select();
		//获取总数
    $jobcount = $jobs->where($where)->count();
		$count = $list->count();
		//创建分页对象
		$page = new \Think\Page($count, 10);// 实例化分页类
    $page->setConfig('first', '首页');
    $page->setConfig('prev', '上一页');
    $page->setConfig('next', '下一页');
    $page->setConfig('end', '尾页');
		//获取页码字符串
		$pages = $page->show();
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		//读取数据
		$lists = $list->limit($limit)->select();

    //查询职位个数
    foreach ($lists as $key => $value) {
      $jid = $value['id'];
      $lists[$key]['sum'] = $jobs->where("company_id={$jid}")->count();
    }
		// var_dump($pages);die;
		//分配变量
		$this->assign('lists',$lists);
		$this->assign('pages', $pages);
		$this->assign('trades', $trades);
		$this->assign('tradesAll', $tradesAll);
		// $this->assign('num',$num);

		
        $this->display();
    }
    // 公司搜索显示列表
    public function seach(){
    	$data = I();
    	// var_dump($data);die;
    	if ($data['city'] == '全国') {
            $where['city'] == '';
        } else {
            $where['city'] = $data['city'];
        }
        //根据条件在C方法里的数组取得数据库的值
        $where['stage'] = array_flip(C('company_stage'))[$data['stage']];
        $where['trade'] = array('like', '%'.$data['trade'].'%');

        $where = array_filter($where);
        // var_dump($where);die;
  		//创建数据库操作对象
  		$list = M('company');
  		//创建查询职位标签
  		$trade = M('trade');
  		//读取标签
  		$trades = $trade->limit(0,5)->select();

  		$tradesAll = $trade->select();
  		//获取总数
  		$count = $list->where($where)->count();
  		//创建分页对象
  		$page = new \Think\Page($count, 10);// 实例化分页类
      $page->setConfig('first', '首页');
      $page->setConfig('prev', '上一页');
      $page->setConfig('next', '下一页');
      $page->setConfig('end', '尾页');
  		//获取页码字符串
  		$pages = $page->show();
  		//获取limit参数
  		$limit = $page->firstRow.','.$page->listRows;
  		//读取数据
  		$lists = $list->where($where)->limit($limit)->select();
  		// var_dump($pages);die;
  		//分配变量
  		$this->assign('lists',$lists);
  		$this->assign('pages', $pages);
  		$this->assign('trades', $trades);
  		$this->assign('tradesAll', $tradesAll);

    	$this->display();
    }
}