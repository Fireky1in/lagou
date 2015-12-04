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
class ResumeController extends BaseController {
	public function __construct(){
		parent::__construct();
		if(!session('?user')){
			$this->error('登录后才能查看简历哦^^',__APP__,3);
		}
	}

	public function index(){
		$id = session("user.id");
		//判断用户是否写过简历
		$resume=M('resume');
		$user=M('users');                                        
		$res_resume=$resume->where("id='$id'")->find();   
		$res_user=$user->where("id='$id'")->find();
		// var_dump($res_resume);
		//没写过执行插入
		if($res_resume==''){
			$ins['id']=$id;			
			$res_res=$resume->add($ins);
			$data['username']=$res_user['username'];
			$data['create_time']=time();
			$data['image']="default_headpic.png";
		}else{
			//写过将简历信息查询出来
			//将性别信息处理
			if($res_resume['sex']==1){
				$sex='男';
			}else{
				$sex='女';
			}
			//用户名
			$data['username']=$res_resume['name'];
			$data['sex']=$sex;
			$data['education']=$res_resume['education'];//教育程度
			$data['work_year']=$res_resume['work_year'];//工作经验
			$data['school']=$res_resume['school'];//工作经验
			$data['professional']=$res_resume['professional'];//工作经验
			$data['age']=$res_resume['age'];//工作经验
			$data['city']=$res_resume['city'];//工作经验
			$data['phone']=$res_resume['phone'];//手机号码
			$data['selfdes']=$res_resume['selfdes'];//手机号码
			$data['email']=$res_resume['email'];
			$data['now_state']=$res_resume['now_state'];
			$data['modifty_time']=$res_resume['modifty_time'];
			$data['time']=date('Y-m-d',$res_resume['modify_time']);//最近更新时间
			//头像
			if($res_resume['image']==''){
				$data['image']="default_headpic.png";
			}else{
				$data['image']=$res_resume['image'];
			}
		}
		// var_dump($data);
		//判断用户是否有期望工作
		$hopejob=M('hopejob');		
		$res_hope=$hopejob->where("rid='{$res_resume['id']}'")->find();
		if($res_hope){
			$data['hope_in']='dn';
			$data['hope_out']='';
			$data['hope_city'] = $res_hope['city'];
			$data['hope_nature'] = $res_hope['nature'];
			$data['hope_job'] = $res_hope['job'];
			$data['hope_salary'] = $res_hope['salary'];
			$data['hope_value']=$res_hope['city'].'&nbsp;&nbsp;'.$res_hope['nature'].'&nbsp;&nbsp;'.$res_hope['job'].'&nbsp;&nbsp;'.$res_hope['salary'];
		}else{
			$data['hope_in']='';
			$data['hope_out']='dn';				
		}
		//判断用户是否有过工作经历
		$work_history=M('work_history');  
		$res_history=$work_history->where("rid='{$id}'")->select();
		if($res_history){
			$data['history_work_first']='';
			$data['history_work_second']='dn';
			$data['history_work_third']='dn';
			$data['history_value']=$res_history;
		}else{
			$data['history_work_second']='dn';
		}
		//判断用户是否有项目经验
		$project = M('project');
		$res_project = $project->where("rid='{$id}'")->select();
		if($res_project){
			$data['project_first']='';
			$data['project_second']='';
			$data['project_third']='dn';
			$data['project_value'] = $res_project;
		}else{
			#
		}
		//判断用户是否有教育经历
		$eduction = M('education');
		$res_eduction = $eduction->where("rid='{$id}'")->select();
		if($res_eduction){
			$data['eduction_value'] = $res_eduction;
			$data['eduction_first'] = '';
			$data['eduction_second'] = 'dn';
			$data['eduction_third'] = ''; //用于显示添加
		}else{
			#
		}
		//判断用户是否有过自我介绍
		if($res_resume['introduction'] != ''){
			$data['introduction_value']=$res_resume['introduction'];
			$data['introduction_first']='';//用于显示自我介绍
			$data['introduction_second']='dn';//用于隐藏添加
			$data['introduction_third']='';//用于显示修改
		}
		//判断用户是否有作品
		$show=M('show_works');
		$res_show=$show->where("rid='{$id}'")->select();
		if($res_show){
			$data['show_works_value']=$res_show;
			$data['show_works_first']='dn';//用于隐藏添加栏
			$data['show_works_second']='';//用于显示作品
			$data['show_works_third']='';//用于添加作品
		}else{
			$data['show_works_third']='dn';
		}
		//模板的输出
		// var_dump($data);
		$this->assign('data',$data);
		$this->display();
	}
	//用户名 ajax修改
	public function updateUserName(){
		$data = I();
		$in['name'] = $data['name'];
		$in['id']= session("user.id");
		$in['modify_time'] = time();
		$res = M('resume')->save($in);
		if($res){
			$msg['success'] = true;
			$msg['msg'] = '成功';
			$msg['resubmitToken'] = $data['resubmitToken'];
			$this->ajaxReturn($msg);
		}else{
			$msg['success'] = false;
			$msg['msg'] = '失败';
			$this->ajaxReturn($msg);
		}
		
	}
	//一句话 ajax修改
	public function oneWord(){
		$data = I();
		$resume = M('resume');
		$in['introduction'] = $data['oneWord'];
		$in['id']= session("user.id");
		$in['modifty_time'] = time();
		if($resume->save($in)){
			$msg['success'] = true;
			$msg['msg'] = '成功';
			$msg['resubmitToken'] = $data['resubmitToken'];
			$this->ajaxReturn($msg);
		}else{
			$msg['success'] = false;
			$msg['msg'] = '失败';
			$msg['resubmitToken'] = $data['resubmitToken'];
			$this->ajaxReturn($msg);
		}
	}

	//个人基本信息修改
	public function basic(){
		$data = I();
		
		$resume = M('resume');
		$in['email'] = $data['email'];
		$in['education'] = $data['highestEducation'];
		$in['city'] = $data['liveCity'];
		$in['phone'] = $data['phone'];
		$in['work_year'] = $data['workYear'];
		if(!empty($data['sex'])){
			switch($data['sex']){
				case '男' : $in['sex'] = 1;break;
				case '女' : $in['sex'] = 0;break;
			}
		}
		$in['id']= session("user.id");
		$in['modify_time'] = time();
		//开启事务
		// var_dump($in);die;
		$resume->startTrans();
		$res = M('resume')->save($in);
		//工作经历置顶的工作
		$work['istop'] = $data['userIdentity'];
		$newwork['istop'] = 1;
		//将当前置顶,原先置顶的互换一下istop
		// $w_his = M('work_history')->where("rid={$in['id']} and istop=1")->save($work);
		// $nw_his = M('work_history')->where("rid={$in['id']} and istop={$work['istop']}")->save($newwork);
		// var_dump($w_his);die;
		if($res){
			$resume->commit();
			$msg['success'] = true;
			$msg['msg'] = '成功';
			$msg['resubmitToken'] = $data['resubmitToken'];
			$this->ajaxReturn($msg);
		}else{
			$resume->rollback();
			$msg['success'] = false;
			$msg['msg'] = '失败';
			$this->ajaxReturn($msg);
		}
	}

	//工作经历修改
	public function workSave(){
		$data = I();
		$resume = M('resume');
		$in['id'] = $data['expid'];
		$in['company'] = $data['companyName'];
		$in['job'] = $data['positionName'];
		$in['content'] = $data['workContent'];
		$arr = explode('.',$data['startDate']);
		$brr = explode('.',$data['endDate']);
		$in['begin_yeartime'] = $arr[0];
		$in['end_yeartime'] = $brr[0];
		$in['begin_monthtime'] = $arr[1];
		$in['end_monthtime'] = $brr[1];
		$ins['modify_time']=time();
		// $resume->startTrans();
		// $re = M('resume')->save($ins);
		$res = M('work_history')->save($in);
		if($res){
			// $resume->commit();
			$msg['success'] = true;
			$msg['msg'] = '成功';
			$msg['content'] = $in;
			$this->ajaxReturn($msg);
		}else{
			// $resume->rollback();
			$msg['success'] = false;
			$msg['msg'] = '失败';
			$this->ajaxReturn($msg);
		}
	}

	//教育经历修改
	public function eduSave(){
		$data = I();
		$in['id'] = $data['eduid'];
		$in['school'] = $data['schoolName'];
		$in['education'] = $data['education'];
		$in['end_time'] = $data['endYear'];
		$res = M('education')->save($in);
		// var_dump($res);die;
		if($res){
			$msg['success'] = true;
			$msg['msg'] = '成功';
			$msg['content'] = $in;
			$this->ajaxReturn($msg);
		}else{
			$msg['success'] = false;
			$msg['msg'] = '失败';
			$this->ajaxReturn($msg);
		}
	}

	public function selfDes(){
		$data = I();
		var_dump($data);
	}
	// 个人建立基本信息的修改
	public function update_ajax(){
		$data = I();
		$data['id']= session("user.id");
		if($data['name'] == ''){
			$check = -1;
		}elseif ($data['gender'] == ''){
			$check = -1;
		}elseif ($data['topDegree'] == '') {
			$check = -1;
		}elseif ($data['workyear'] == ''){
			$check = -1;
		}elseif ($data['tel'] == ''){
			$check = -1;
		}else{
			$in['id']=$data['id'];
			$in['name']=$data['name'];
			$in['sex']=$data['gender'];
			$in['education']=$data['topDegree'];
			$in['work_year']=$data['workyear'];
			$in['phone']=$data['tel'];
			$in['email']=$data['email'];
			$in['now_state']=$data['currentState'];
			$resume = M('resume');
			$result = $resume->where("id='{$data['id']}'")->find();
			if($result){
				$in['modify_time']=time();
				$res=$resume->where("id='{$in['id']}'")->save($in);
				if($res){
					$check = 1;
					$msg['code'] = $ckeck;
					$msg['msg'] = '好了';
					$this->ajaxReturn($check);
				}else{

				}
			}else{
				$in['create_time']=time();
				$res=$resume->where("id='{$in['id']}'")->add($in);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}
			}
		}
	}
	//ajax提交表单处理期望工作
	public function hope_ajax(){
			$in['rid']=session("user.id");
			$in['city']=$_POST['expectCity'];
			$in['nature']=$_POST['type'];
			$in['job']=$_POST['expectPosition'];
			$in['salary']=$_POST['expectSalary'];
			$hope=M('hopejob');
			$result = $hope->where("rid='{$in['rid']}'")->find();
			if($result){
				$res=$hope->where("rid='{$in['rid']}'")->save($in);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}				
			}else{
				$res=$hope->where("rid='{$in['rid']}'")->add($in);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}				
			}
	}
	//ajax提交表单处理工作经历
	public function history_ajax(){
		if($_POST['companyName'] == ''){
			$check = -1;
		}elseif ($_POST['positionName'] == ''){
			$check = -1;
		}elseif ($_POST['companyYearStart'] == '') {
			$check = -1;
		}elseif ($_POST['companyMonthStart'] == ''){
			$check = -1;
		}elseif ($_POST['companyYearEnd'] == ''){
			$check = -1;
		}elseif($_POST['companyMonthEnd'] == ''){
			$check = -1;
		}else{
			$data['rid']=session("user.id");//手写的简历表外键
			$data['company'] = $_POST['companyName'];
			$data['job'] = $_POST['positionName'];
			$data['begin_yeartime'] = $_POST['companyYearStart'];
			$data['begin_monthtime'] = $_POST['companyMonthStart'];
			$data['end_yeartime'] = $_POST['companyYearEnd'];
			$data['end_monthtime'] = $_POST['companyMonthEnd'];
			$history = M('work_history');
			$result = $history->where("rid='{$in['rid']}'")->find();
			if(!empty($_POST['history_id'])){
				$result = $history->where("id='{$_POST['history_id']}'")->save($data);
				if($result){
					$check = 1;
					$this->ajaxReturn($check);					
				}else{
					$check = -1;
					$this->ajaxReturn($check);					
				}
			}else{
				$res=$history->add($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}				
			}
		}
	}
	public function delhistory_ajax(){
		$history = M('work_history');
		$res_history=$history->where("id={$_GET['id']}")->delete();
		if($res_history){
			$this->redirect('Resume/index');
		}else{
			$this->redirect('Resume/index');
		}
	}
	//ajax提交表单处理项目经验
	public function project_ajax(){
		if($_POST['projectName'] == ''){
			$check = -1;
		}elseif($_POST['thePost'] == ''){
			$check = -1;
		}elseif($_POST['projectYearStart'] == ''){
			$check = -1;
		}elseif($_POST['projectMonthStart'] == ''){
			$check = -1;
		}elseif($_POST['projectYearEnd'] == ''){
			$check = -1;
		}elseif($_POST['projectMonthEnd'] == ''){
			$check = -1;
		}else{
			$data['rid'] =session("user.id"); //手写的简历表外键
			$data['name'] = $_POST['projectName'];
			$data['job'] = $_POST['thePost'];
			$data['begin_yeartime'] = $_POST['projectYearStart'];
			$data['begin_monthtime'] = $_POST['projectMonthStart'];
			$data['end_yeartime'] = $_POST['projectYearEnd'];
			$data['end_monthtime'] = $_POST['projectMonthEnd'];
			$data['description'] = $_POST['projectDescription'];
			$project = M('project');
			if(!empty($_POST['project_id'])){
				$res=$project->where("id={$_POST['project_id']}")->save($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}
			}else{
				$res=$project->add($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}				
			}
		}
	}
	public function delproject_ajax(){
		$project = M('project');
		$res_project=$project->where("id={$_GET['id']}")->delete();
		if($res_project){
			$this->redirect('Resume/index');
		}else{
			$this->redirect('Resume/index');
		}		
	}
	//ajax提交表单处理教育背景
	public function edu_ajax(){
		if($_POST['schoolName'] == ''){
			$check = -1;
		}elseif($_POST['degree'] == ''){
			$check = -1;
		}elseif($_POST['professionalName'] == ''){
			$check = -1;
		}elseif($_POST['schoolYearEnd'] == ''){
			$check = -1;
		}elseif($_POST['schoolYearStart'] == ''){
			$check = -1;
		}else{
			$data['rid'] = session("user.id"); //手写的简历表外键
			$data['school'] = $_POST['schoolName'];
			$data['education'] = $_POST['degree'];
			$data['professional'] = $_POST['professionalName'];
			$data['begin_time'] = $_POST['schoolYearEnd'];
			$data['end_time'] = $_POST['schoolYearStart'];
			$eduction = M('education');
			if(!empty($_POST['edu_id'])){
				$res=$eduction->where("id={$_POST['edu_id']}")->save($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}
			}else{
				$res=$eduction->add($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}				
			}
		}
	}
	public function deledu_ajax(){
		$education = M('education');
		$res_eduction=$education->where("id={$_GET['id']}")->delete();
		if($res_eduction){
			$this->redirect('Resume/index');
		}else{
			$this->redirect('Resume/index');
		}		
	}
	//ajax提交表单处理自我描述
	public function introduce_ajax(){
		$data['id'] = session("user.id"); //简历表主键
		$data['introduction']=$_POST['selfDescription'];
		$resume=M('resume');
		$res_resume=$resume->where("id={$data['id']}")->find();
		if($res_resume){
			$result=$resume->where("id={$data['id']}")->save($data);
			if($result){
				$check = 1;
				$this->ajaxReturn($check);					
			}else{
				$check = -1;
				$this->ajaxReturn($check);
			}			
		}else{
			$result=$resume->where("id={$data['id']}")->add($data);
			if($result){
				$check = 1;
				$this->ajaxReturn($check);					
			}else{
				$check = -1;
				$this->ajaxReturn($check);
			}		
		}
	}
	//ajax提交表单处理作品展示
	public function show_ajax(){
		$data['rid']=session("user.id"); //简历表外键
		if($_POST['workLink'] == ''){
			$check = -1;
		}elseif($_POST['workDescription'] == ''){
			$check = -1;
		}else{
			$data['link']=$_POST['workLink'];
			$data['description']=$_POST['workDescription'];
			$show=M('show_works');
			$res_show=$show->where("id={$_POST['show_id']}")->find();			
			if(!empty($_POST['show_id'])){
				$res=$show->where("id={$_POST['show_id']}")->save($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}
			}else{
				$res=$show->add($data);
				if($res){
					$check = 1;
					$this->ajaxReturn($check);
				}else{
					$check = -1;
					$this->ajaxReturn($check);
				}				
			}
		}	
	}
	public function delshow_ajax(){
		$show = M('show_works');
		$res_show=$show->where("id={$_GET['id']}")->delete();
		if($res_show){
			$this->redirect('Resume/index');
		}else{
			$this->redirect('Resume/index');
		}			
	}
	//用户头像上传
	public function upload()
	{
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =    3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =     './User/image/'; // 设置附件上传目录
		$upload->saveName = (string)session('user.id');
		$upload->saveExt = 'jpeg';
		$upload->subName = "";
		$upload->replace = true;
		$upload->hash = false;
		$info = $upload->upload();
		if (!$info)
		{
			$msg['code'] = 0;
			$msg['msg'] = $upload->getError();
		} else {
			$resume= M('resume');
			$id=session('user.id');
			$data['image']=$info['headPic']['savename'];
			$res_resume=$resume->where("id={$id}")->save($data);
			$msg['code'] = 1;
			$msg['msg'] = '/Uploads/User/image/'.$info['headPic']['savename'];
		}
		$this->ajaxReturn($msg);
	}

	//奖励预览
	public function resumeShow(){
		$id=session('user.id');
		$resume=M('resume');
		$hopejob=M('hopejob');
		$work_history=M('work_history');
		$project=M('project');
		$education=M('education');
		$show_works=M('show_works');
		//查询用户基本信息
		$res_resume=$resume->where("id='{$id}'")->find();
		if($res_resume['create_time'] == '' ){
			$this->error('请完善简历',U("Resume/index"),3);
		}
		if($res_resume){
			$data['name']=$res_resume['name'];
			if($res_resume['sex']==1){
				$data['sex']='男';
			}else{
				$data['sex']='女';
			}
			$data['education']=$res_resume['education'];
			$data['work_year']=$res_resume['work_year'];
			$data['school']=$res_resume['school'];
			$data['professional']=$res_resume['professional'];
			$data['phone']=$res_resume['phone'];
			$data['email']=$res_resume['email'];
			$data['now_state']=$res_resume['now_state'];
			$data['image']=$res_resume['image'];
			$data['introduction']=$res_resume['introduction'];
			$rid=$res_resume['id'];
		}else{
			$data['first']='dn';
		}
		// var_dump($data['introduction']);
		//期望工作
		$res_hopejob=$hopejob->where("rid={$rid}")->find();
		if($res_hopejob){
			$data['hope_city']=$res_hopejob['city'];
			$data['hope_nature']=$res_hopejob['nature'];
			$data['hope_job']=$res_hopejob['job'];
			$data['hope_salary']=$res_hopejob['salary'];
		}else{
			$data['second']='dn';
		}
		//工作经历
		$res_work_history=$work_history->where("rid={$rid}")->select();
		if($res_work_history){
			$data['work_history_value']=$res_work_history;
		}else{
			$data['third']='dn';
		}
		// var_dump($data['work_history_value']);
		//项目经验
		$res_project=$project->where("rid={$rid}")->select();
		if($res_project){
			$data['res_project_value']=$res_project;
		}else{
			$data['fouth']='dn';
		}
		//教育背景
		$res_education=$education->where("rid={$rid}")->select();
		if($res_education){
			$data['res_education_value']=$res_education;
		}else{
			$data['five']='dn';
		}
		//作品展示
		$res_show_works=$show_works->where("rid={$rid}")->select();
		if($res_show_works){
			$data['res_show_works_value']=$res_show_works;
		}else{
			$data['sixty']='dn';
		}


		// var_dump($data);
		$this->assign('data',$data);
		$this->display();
	}

	public function index_bak(){
		$this->display();
	}
}