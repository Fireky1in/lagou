<?php
//+---------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
//+---------------------------------------------------------------------
// | Team:Five Over
//+---------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
//+---------------------------------------------------------------------
// | Date :2015.11.13
//+---------------------------------------------------------------------
/**
*@version
*一拍页面展示
*/
namespace Home\Controller;
use Think\Controller;

class YiPaiController extends Controller {
    public $id = null;
    public $comObj = null;

    public function __construct()
    {
        parent::__construct();
        if (!session('?user')) {
            $this->error('请先登录', U('Login/topLogin'));
        }
        $this->id = session('user.id');
        $this->comObj = D('yipai');
    }
    public function index(){
        $list = M('resume');
        $id = $this->id;
        $where = "state=1";
        $lists = $list->join('left join lg_yipai on lg_resume.id=lg_yipai.id')->where($where)->select();
        //var_dump($lists);die;
        
        
        //echo $list->getLastSql();die;
        $this->assign('lists',$lists);
        $this->display();
    }

    public function send(){
        $list = M('yipai');
        //读取标签
        $id = $this->id;
        $where = "id={$id}";
        $lists = $list->where($where)->find();
        $state = $lists['state'];
        // var_dump($state);die;
        if($state == 0){
            $this->display();
        }
        else{
            $this->error("亲，您已提交过哦！",$this->site_url,3);
        }

        

    }   

    public function dosend()
    {   
        $data = I();
        
        $yipai['id'] = $this->id;
        $yipai['userName'] = $data['name'];
        $yipai['sex'] = $data['sex'];
        $yipai['field'] = $data['property'];
        $yipai['workYear'] = $data['workYear'];
        $yipai['phoneNumber'] = $data['phone'];
        $yipai['email'] = $data['email'];
        $yipai['expectPosition'] = $data['expectPosition'];
        $yipai['expectSalary'] = $data['expectSalary'];
        $yipai['expectCity'] = $data['expectCity'];
        $yipai['componySize'] = $data['companyStageContent'];
        $yipai['unexpectCompany'] = $data['shieldContent'];
        $yipai['jobIntention'] = $data['jobIntention'];
        $yipai['state'] = 1;
        // var_dump($yipai);

        $result = $this->comObj->add($yipai);
        // echo D('yipai')->getLastSql();
        // var_dump($result);die;
        if($result){

            $message['success'] = true;
            $message['message'] = "报名成功";
            $message['state'] = 0;
            $this->ajaxReturn($message);
        }else{
            $message['success'] = flase;
            var_dump($yipai);die;
            $this->ajaxReturn($message);
        }

    }
    public function audit(){
        $this->display();
    }
}