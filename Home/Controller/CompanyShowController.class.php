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
*	公司介绍类
*/
namespace Home\Controller;
use Think\Controller;
class CompanyShowController extends BaseController {
	public function index(){
		//接受传来的公司id
		$cid = I('get.cid');

		//查询当前公司详情
		$company = M('company');
		$com_more = $company->find($cid);

		//查询公司标签
		$com_tags = M('company_tag')->field('tag_id')->where("company_id={$cid}")->select();

		//将和标签id对应的标签查出来
		$tag = M('tag');
		foreach ($com_tags as $key => $value) {
			$name = $tag->field('name')->where("id={$value['tag_id']}")->find();
			$arr[] = $name['name'];
		}

		//招聘职位统计
		$job = M('job');
		$zpjob = $job->where("company_id={$cid}")->select();

		//公司产品
		$product = M('product')->where("company_id={$cid}")->limit(2)->order('addtime desc')->select();
		// var_dump($product);

		//公司团队
		$team = M('team')->where("company_id={$cid}")->limit(2)->select();
		// var_dump($team);
		//将标签压入数组
		$com_more['tags'] = $arr;
		// var_dump($com_more);
		$this->assign('com_more',$com_more);
		$this->assign('team',$team);
		$this->assign('zpjob',$zpjob);
		$this->assign('product',$product);
		$this->display();
	}


	//职位列表
		public function lists(){
		//接受传来的公司id
		$cid = I('get.cid');

		//查询当前公司详情
		$company = M('company');
		$com_more = $company->find($cid);

		//查询公司标签
		$com_tags = M('company_tag')->field('tag_id')->where("company_id={$cid}")->select();

		//将和标签id对应的标签查出来
		$tag = M('tag');
		foreach ($com_tags as $key => $value) {
			$name = $tag->field('name')->where("id={$value['tag_id']}")->find();
			$arr[] = $name['name'];
		}

		//招聘职位统计
		$job = M('job');
		$count = $job->where("company_id={$cid}")->count();
		//创建分页对象
		$page = new \Think\Page($count,5);// 实例化分页类
		//获取页码字符串
		$pages = $page->show();
		//获取limit参数
		$limit = $page->firstRow.','.$page->listRows;
		$zpjob = $job->limit($limit)->where("company_id={$cid}")->select();
		//公司产品
		$product = M('product')->where("company_id={$cid}")->limit(2)->order('addtime desc')->select();
		// var_dump($product);

		//公司团队
		$team = M('team')->where("company_id={$cid}")->limit(2)->select();
		// var_dump($team);
		//将标签压入数组
		$com_more['tags'] = $arr;
		// var_dump($com_more);
		$this->assign('com_more',$com_more);
		$this->assign('count',$count);
		$this->assign('pages',$pages);
		$this->assign('team',$team);
		$this->assign('zpjob',$zpjob);
		$this->assign('product',$product);
		$this->display();
	}
}