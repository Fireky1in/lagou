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
*前台基本类
*/


namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	protected $userId = null;
	//判断是否登录
	public function __construct()
	{
		parent::__construct();
		if (session('?user')) {
			$this->userId = session('user.id');
            $_SESSION['user']['type'] = 1;
		}
        
	}

	//获取分类,,首页导航可用
	public function getcate(){
		$cate = M('job_category');
		$map['pid'] = 0;
		$cates = $cate->where($map)->select();
		//将数据按规则合并成思维数组,包含了层级关系
		foreach ($cates as $key => $value) {
			$map['pid'] = $value['id'];
			$cates[$key]['son'] = $cate->where($map)->select();
			foreach ($cates[$key]['son'] as $k => $v) {
				$asp['pid'] = $v['id'];
				$cates[$key]['son'][$k]['reson'] = $cate->where($asp)->select();
			}
		}
		return $cates;
	}

	public function getcc(){
		$res = $this->getSubCate(0);
		echo '<pre>';
		print_r($res);
	}
	//获取子分类 ,将pid传入进来
	public function getSubCate($pid){
		$cate = M('job_category');
		$map['pid'] = $pid;
		$arr = [];
		$cates = $cate->where($map)->select();
		foreach ($cates as $key => $value) {
			$value['sub'] = $this->getSubCate($value['id']);
			$arr[] = $value;
		}
		return $arr;
	}


	    //获取标签
    public function getTags($jobs){
        $company = M('company');
        $company_tag = M('company_tag');
        $tag = M('tag');
        foreach ($jobs as $key => $value) {
            $cid = $value['company_id'];
            $res_company_tag = $company_tag->where("company_id={$cid}")->limit(3)->select();
            $arr = array();
            foreach ($res_company_tag as $k=>$v) {

                $tid = $v['tag_id'];
                $res_tag = $tag->where("id={$tid}")->select();
                foreach ($res_tag as $vs) {
                    // var_dump($vs['name']) ;
                    $arr[] = $vs['name'];
                }
                $jobs[$key]['tags'] = $arr;
                // var_dump($arr['tags']);
            }

        }
        return $jobs;
    }


}