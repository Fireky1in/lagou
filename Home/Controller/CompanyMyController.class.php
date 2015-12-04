<?php
//+---------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
//+---------------------------------------------------------------------
// | Team:Five Over
//+---------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
//+---------------------------------------------------------------------
// | Date :2015.11.09
//+---------------------------------------------------------------------
/**
*@version
*
*/
namespace Home\Controller;
use Think\Controller;
class CompanyMyController extends CompanyBaseController {

    
    // 公司主页
    public function index()
    {
        $data['company_id'] = $this->id;

        $company = $this->comObj->where('id = '.$this->id)->find();
        $company['scale'] = C('company_scale')[$company['scale']];
        $company['stage'] = C('company_stage')[$company['stage']];
        
        $comTagObj = D('CompanyTag');
        $tagObj = D('Tag');
        $res = $comTagObj->where($data)->select();
        $str = '';
        if ($res) {
            foreach($res as $val) {
                $str .= $val['tag_id'].',';
            }
            $str = rtrim($str, ',');
            $where['id'] = array('in', $str);
            $tag = $tagObj->where($where)->select();
            $this->assign('tag', $tag);
        }
        $result1 = $tagObj->where('type > 0')->limit(12)->select();
        $result2 = $tagObj->where('type > 0')->limit('12,10')->select();

        $productObj = D('Product');
        $product = $productObj->where($data)->select();

        $teamObj = D('Team');
        $team = $teamObj->where($data)->select();

        $jobObj = D('Job');
        $job = $jobObj->where(array('company_id'=>$this->id))->select();
        $jobnum = $jobObj->where(array('company_id'=>$this->id))->count();

        $this->assign('company', $company);
        $this->assign('allTag1', $result1);
        $this->assign('allTag2', $result2);
        $this->assign('product', $product);
        $this->assign('team', $team);
        $this->assign('job', $job);
        $this->assign('jobnum', $jobnum);
        $this->display();
    }


    // 公司账号设置-密码重置
    public function updatePwd()
    {
        $this->display();

    //  {"requestId":null,"code":0,"success":false,"msg":"当前密码错误，请重新输入",
        // "resubmitToken":null,"content":null}
    //  {"requestId":null,"code":0,"success":true,"msg":"密码修改成功","resubmitToken":null,
        // "content":null}
    }

    // 密码重置操作
    public function dosettingPwd()
    {
        $data = I();
        $oldPassword = md5(trim($data['oldPassword']));
        $userObj = D('Users');
        $res = $userObj->where(array('id'=>$this->id))->find();
        if ($res['password'] != $oldPassword) {
            $msg['requestId'] = null;
            $msg['code'] = 0;
            $msg['success'] = false;
            $msg['msg'] = '当前密码错误,请重新输入';
            $msg['resubmitToken'] = null;
            $msg['content'] = null;

        } else {
            $save['id'] = $this->id;
            $save['password'] = md5(trim($data['newPassword']));
            $userObj->save($save);
            session('user', null);
            cookie('state', null);
            $msg['requestId'] = null;
            $msg['code'] = 0;
            $msg['success'] = true;
            $msg['msg'] = '密码修改成功';
            $msg['resubmitToken'] = null;
            $msg['content'] = null;
            $msg['url'] = U('Home/User/login');

        }
            $this->ajaxReturn($msg);
    }

    // 修改接收简历邮箱页面
    public function updateEmail()
    {
        $res = $this->comObj->where(array('id'=>$this->id))->find();
        $this->assign('email', $res['email']);
        $this->display();

        // {"content":{"data":{"record":790},"rows":[]},"message":"操作成功","state":1}
    }

    // 修改接收邮箱操作
    public function doSettingEmail()
    {
        $data = I();
        if (empty($data['receiveEmail'])) {
            $msg['content']['rows'] = [];
            $msg['message'] = '操作失败';
            $msg['state'] = 301;
            $this->ajaxReturn($msg);
        }
        $email = $data['receiveEmail'];
        $res = $this->comObj->where(array('id'=>$this->id))->find();
        if ($res['email'] == $email) {
            $msg['content']['rows'] = [];
            $msg['message'] = '操作失败';
            $msg['state'] = 302;
            $this->ajaxReturn($msg);
        }

        $save['id'] = $this->id;
        $save['email'] = $email;
        $this->comObj->save($save);
        $msg['content']['rows'] = [];
        $msg['message'] = '操作成功';
        $msg['state'] = 1;

        $this->ajaxReturn($msg);
    }
}