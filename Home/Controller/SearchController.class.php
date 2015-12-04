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
*搜索结果
*
*/
namespace Home\Controller;
use Think\Controller;
class SearchController extends BaseController {
	public function lists(){
		//条件结果处理
		$job = I('get.job').'?';
		$company = M('company');
		$dejob = M('job');

		$job = strstr($job,'?',true);


		// $data['title']=array('like','%a%');//查询包含a的
		//模糊查询
		$data['name'] = array('like','%'.$job.'%');
		//工作地点
		if(!empty($_GET['city'])){
			$data['city'] = $_GET['city'];
		}

		//工作经验
		if(!empty($_GET['work_year'])){
			$data['work_year'] = $_GET['work_year'];
		}

		//学历
		if(!empty($_GET['edu'])){
			$data['edu'] = $_GET['edu'];
		}

		//公司阶段
		// var_dump(!is_null($_GET['stage']));
		if(!is_null($_GET['stage'])){
			$map['stage'] = (int)($_GET['stage'])-1;
		}
		// var_dump(C('company_stage'));

		//公司领域
		if(!empty($_GET['trade'])){
			$map['trade'] =$_GET['trade'];
		}

		//月薪
		if(!empty($_GET['salary'])){
			switch($_GET['salary']){
				case '2k以下':
					$dada['salary_low']=array(array('egt',0),array('elt',2));
					break;
				case '2k-5k':
					$dada['salary_low']=array(array('egt',2),array('elt',5));
					break;
				case '5k-10k':
					$dada['salary_low']=array(array('egt',5),array('elt',10));
					break;
				case '10k-15k':
					$dada['salary_low']=array(array('egt',10),array('elt',15));
					break;
				case '15k-25k':
					$dada['salary_low']=array(array('egt',15),array('elt',25));
					break;
				case '25k-50k':
					$dada['salary_low']=array(array('egt',25),array('elt',50));
					break;
				case '50k以上':
					$dada['salary_low']=array(array('egt',50));
					break;
			}
		}

		//工作性质
		// if(isset($_GET['nature'])){
		// 	$data['nature']=$_GET['nature'];
		// }


		//排序方式
		if(isset($_GET['time'])){
			$order = 'create_time desc';
		}
		 // lg_job
		$sql = "select * from lg_job,lg_company ";
		//获取总数
		
		$jobbss = $dejob->where($data)->select();
		foreach ($jobbss as $key => $value) {
			$map['id'] = $value['company_id'];
			$com_res = $company->where($map)->find();
			if($com_res){
				$jobbss[$key]['company'] = $com_res;
			}else{
				unset($jobbss[$key]);
			}
		}
		$jj = array();
		foreach ($jobbss as $key => $value) {
			if(!is_null($value)){
				$jj[] = $value;
			}
		}
		$count = count($jj);
		$num = 20;
		//创建分页对象
		$page = new \Think\Page($count,$num);// 实例化分页类
		//获取页码字符串
		$pages = $page->show();
		//获取limit参数
		$limit = $page->firstRow+$page->listRows;
		// var_dump($limit);
		$result = array();
		for($i = $page->firstRow; $i<$limit;$i++){
			if(isset($jj[$i])){
				$result[] = $jj[$i];
			}
		}

		// var_dump($result);

		//将company表一起查询
		// foreach ($result as $key => $value) {
		// 	$map['id'] = $value['company_id'];
		// 	$com_res = $company->where($map)->find();
		// 	if($com_res){
		// 		$result[$key]['company'] = $com_res;
		// 	}else{
		// 		unset($result[$key]);
		// 	}
		// }
		var_dump($map);
		//获取公司标签
		$result = $this->getTags($result);
		// $result['sum'] = $count;
		//工作经验
		// var_dump($result);die;
		$works = $dejob->field('work_year')->group('work_year')->select();
		//学历
		$edu = $dejob->field('edu')->group('edu')->select();
		//行业领域
		$trade = M('trade')->field('name as trade')->group('trade')->select();



		// var_dump($trade);die;
		//将查询条件带过去
		
		if(count($result)<=0){
			$isn = '<div style="clear:both;height:30px;color:#00B38A">暂无</div>';
		}else{
			$isn = '';
		}
		// var_dump($result);
		if(!is_null($_GET['stage'])){
			$map['stage'] = (int)($_GET['stage']);
		}
		//关键字
		$this->assign('k_words',$job);
		//是否为空
		$this->assign('isn',$isn);
		//查询条件
		$this->assign('da',$data);
		$this->assign('map',$map);
		//公司领域
		$this->assign('trade',$trade);
		// 工作经验
		$this->assign('works',$works);
		$this->assign('edu',$edu);
		$this->assign('jobs',$result);
		$this->assign('pages', $pages);

		// var_dump($result);
		$this->display();
	}
}