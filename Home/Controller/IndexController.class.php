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
*       //前台首页
*/
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        // var_dump(session());
    	//左侧值为分类
    	$cates = $this->getcate();
    	$this->assign('cates',$cates);


    	$job = M('job');
    	//最新职位(关联四张表)
    	$jobs = $job->field('lg_job.*,lg_company.trade,lg_company.id as cid,lg_company.short_name,lg_company.stage')->join('left join lg_company on lg_job.company_id=lg_company.id')->order('create_time desc')->limit(15)->select();

    	//热门职位
    	$redjobs = $job->field('lg_job.*,lg_company.trade,lg_company.id as cid,lg_company.short_name,lg_company.stage')->join('left join lg_company on lg_job.company_id=lg_company.id')->order('modify_time desc')->limit(15)->select();
        //获取标记
        $jobs = $this->getTags($jobs);
        // var_dump($jobs[0]['tags']);
    	$this->assign('jobs',$jobs);
        $redjobs = $this->getTags($redjobs);
    	$this->assign('redjobs',$redjobs);
    	//友情链接
    	$flinks = $this->getFlinks();
    	$this->assign('links',$flinks);


    	//下nav
    	$bnav = $this->bottomNav();
    	$this->assign('bnav',$bnav);
        

        //广告位

        $ads = $this->getAd();
    	$this->assign('ads',$ads);
        $this->display();
    }

    //友情链接
    public function getFlinks(){
    	$flink = M('links');
    	$map['state'] = 1;
    	$res = $flink->where($map)->order('create_time')->select();
    	if($res){
    		return $res;
    	}else{
    		return;
    	}
    }

    //导航焦点图下
    function bottomNav(){
    	//必须是已经验证,并且可以在首页显示
    	$company = M('company');
    	$map['isnav'] = 1;
    	$map['state'] = 1;
    	$res = $company->limit(6)->select();
    	if($res){
    		return $res;
    	}else{
    		return;
    	}
    }

    //获取广告位
    function getAd(){
    	$ad = M('ad');
    	$ads = $ad->select();
    	if($ads){
    		return $ads;
    	}else{
    		return;
    	}
    }
}