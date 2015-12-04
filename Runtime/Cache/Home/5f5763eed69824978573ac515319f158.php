<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>发布新职位-招聘服务-拉勾网-最专业的互联网招聘平台 </title>
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="/favicon.ico" rel="Shortcut Icon">
        <link href="/Public/css3/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
        <script src="/Public/HomeStyle/js/additional-methods.js" type="text/javascript"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/HomeStyle/js/excanvas.js">
            </script>
        <![endif]-->
        <link rel="stylesheet" href="/Public/HomeStyle/css/ui.css">
        <link rel="stylesheet" href="/Public/HomeStyle/css/window.css">
    </head>
    
    <body>
        <div id="body">
            <link href="/Public/css/header.css" rel="stylesheet">
<!-- 未登录用户头部 -->
<?php if (!session('?user')) :?>
<div id="lg_tbar">
    <div class="inner">
        <!-- 未登录头部 -->
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        
        <ul class="lg_tbar_r reset">
        <li>
            <a href="<?php echo U('Home/Login/topLogin');?>" target='_blank' data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
        </li>
        <li>
            <a href="<?php echo U('Home/Register/register');?>" target='_blank' class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
        </li>
        </ul>
    </div>    
</div>        
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>

<?php if($_SESSION['user']['type'] == 1) :?>
    <!-- 个人用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                <em class="noticeDot dn" id="noticeDot_delivery"></em>
            </li>
                <li class="user_dpdown">
                <span class="unick bl"><?php echo session('user')['username'];?></span>
                <em class="noticeDot dn" id="noticeDot_name"></em>
                <i></i>
                <ul class="reset">
                    <li>
                        <a href="http://www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我要找工作</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
                    </li>
                    <li>
                        <a href="javascript:;" id='logouta' data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        <script type="text/javascript">
                        $('#logouta').click(function(){
                            $.post('<?php echo U("Home/Login/logout");?>',{},function(data){
                                window.location.reload();
                            });
                            return false;
                        });
                        </script>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>    
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>
                     
<?php if($_SESSION['user']['type'] == 2) :?>
        <!-- 企业用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                <em class="noticeDot dn" id="noticeDot_delivery"></em>
            </li>
                <li class="user_dpdown">
                <span class="unick bl"><?php echo session('user')['username'];?></span>
                <em class="noticeDot dn" id="noticeDot_name"></em>
                <i></i>
                <ul class="reset">
                    <li>
                        <a href="<?php echo U('Home/CompanyJob/positions');?>" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我发布的职位</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我收到的简历</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/CompanyShow/index');?>" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的公司首页</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我要找工作</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我账号设置</a>
                    </li>
                    <li>
                        <a href="javascript:;" id='logouta' data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        <script type="text/javascript">
                        $('#logouta').click(function(){
                            $.post('<?php echo U("Home/Login/logout");?>',{},function(data){
                                window.location.reload();
                            });
                            return false;
                        });
                        </script>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="lg_tnav">
    <div class="inner">  
        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>企业版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="http://hr.lagou.com/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">工作台</a>
            </li>
            <li>
                <a href="http://hr.lagou.com/interview/unHandlelist.html" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">简历管理</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
            </li>
            <li>
                <a href="http://hr.lagou.com/plus/vip.html" data-lg-tj-id="5x00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">PLUS</a>
                <b class="plusNum" id="plusNum"></b>
            </li>
            <li>
                <a href="http://pai.lagou.com/hr/talent.html" data-lg-tj-id="5y00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
            </li>
        </ul>   
    </div>
</div>
<?php endif ;?>   
                
            <div id="container">
                <div class="sidebar">
                    <a class="btn_create" href="<?php echo U('Home/CompanyJob/create');?>">
                        发布新职位
                    </a>
                    <dl class="company_center_aside">
                        <dt>
                            我收到的简历
                        </dt>
                        <dd <?php if(unhandle == 'unhandle'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/unhandle');?>">
                                待处理简历
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'forward'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showAudition');?>">
                                已通知面试简历
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'notpass'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/ResumeHandle/showNotpass');?>">
                                不合适简历
                            </a>
                        </dd>
                    </dl>
                    <dl class="company_center_aside">
                        <dt>
                            我发布的职位
                        </dt>
                        <dd <?php if(unhandle == 'positions'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/positions');?>">
                                有效职位
                            </a>
                        </dd>
                        <dd <?php if(unhandle == 'invalid'): ?>class="current"<?php endif; ?>>
                            <a href="<?php echo U('Home/CompanyJob/invalid');?>">
                                已下线职位
                            </a>
                        </dd>
                    </dl>
                    <div class="subscribe_side mt20">
                        <div class="f14">
                            想收到更多更好的简历？
                        </div>
                        <div class="f18 mb10">
                            就用拉勾招聘加速助手
                        </div>
                        <div>
                            咨询：
                            <a class="f16" href="mailto:jessica@lagou.com">
                                FiveOver@lagou.com
                            </a>
                        </div>
                        <div class="f18 ti2em">
                            010-57286512
                        </div>
                    </div>
                    <div class="subscribe_side mt20">
                        <div class="f14">
                            加入互联网HR交流群
                        </div>
                        <div class="f18 mb10">
                            跟同行聊聊
                        </div>
                        <div class="f24">
                            338167634
                        </div>
                    </div>
                </div>
                <div class="content">
                    <dl class="company_center_content">
                        <dt>
                            <h1>
                                <em></em>
                                发布新职位
                            </h1>
                        </dt>
                        <dd>
                            <form action="<?php echo U('Home/CompanyJob/doCreate');?>" method="post"
                            id="jobForm" name="jobForm" onsubmit="return $.sub(this);">
                                <input type="hidden" name="id" value="<?php echo ($job["id"]); ?>">
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">职位类别</td>
                                            <td>
                                                <input type="hidden" id="positionType" value="<?php echo ($type["name"]); ?>" name="positionType">
                                                <input type="button" placeholder="请选择职位类别" id="select_category" class="selectr selectr_380" value="<?php echo ($type["name"]); ?>">
                                                <div class="dn" id="box_job" style="display:none">
                                                    <?php foreach ($category as $key => $value): ?>
                                                    <dl>
                                                        <dt><?php echo ($value["name"]); ?></dt>
                                                        <dd>
                                                            <ul class="reset job_main">
                                                                <?php foreach ($value['child'] as $kk => $vv): ?>
                                                                <li>
                                                                    <span><?php echo ($vv["name"]); ?></span>
                                                                    <ul class="reset job_sub dn">
                                                                        <?php foreach ($vv['child'] as $k => $v): ?>
                                                                            <li><?php echo ($v["name"]); ?></li>
                                                                        <?php endforeach ?>
                                                                    </ul>
                                                                </li>
                                                                <?php endforeach ?>
                                                                
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                    <?php endforeach ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>
                                                职位名称
                                            </td>
                                            <td>
                                                <input type="text" placeholder="请输入职位名称，如：产品经理" value="<?php echo ($job["name"]); ?>" name="name" id="positionName">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                所属部门
                                            </td>
                                            <td>
                                                <input type="text" placeholder="请输入所属部门" value="<?php echo ($job["branch"]); ?>" name="branch" id="department">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">
                                                工作性质
                                            </td>
                                            <td>
                                                <ul class="profile_radio clearfix reset">
                                                    <li <?php if($job['nature'] == '全职'): ?>class="current"<?php endif; ?>>
                                                        全职
                                                        <em></em>
                                                        <input type="radio" name="nature" value="全职">
                                                    </li>
                                                    <li <?php if($job['nature'] == '兼职'): ?>class="current"<?php endif; ?>>
                                                        兼职
                                                        <em></em>
                                                        <input type="radio" name="nature" value="兼职">
                                                    </li>
                                                    <li <?php if($job['nature'] == '实习'): ?>class="current"<?php endif; ?>>
                                                        实习
                                                        <em></em>
                                                        <input type="radio" name="nature" value="实习">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>月薪范围</td>
                                            <td>
                                                <div class="salary_range">
                                                    <div>
                                                        <input type="text" placeholder="最低月薪" value="<?php echo ($job["salary_low"]); ?>" id="salaryMin" name="salary_low">
                                                        <span> k </span>
                                                    </div>
                                                    <div>
                                                        <input type="text" placeholder="最高月薪" value="<?php echo ($job["salary_high"]); ?>" id="salaryMax" name="salary_high">
                                                        <span> k </span>
                                                    </div>
                                                    <span>只能输入整数，如：9</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>工作城市</td>
                                            <td>
                                                <input type="text" placeholder="请输入工作城市，如：北京" value="<?php echo ($job["city"]); ?>" name="city"
                                                id="workAddress">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">工作经验</td>
                                            <td>
                                                <input type="hidden" id="experience" value="<?php echo ($job["work_year"]); ?>" name="work_year">
                                                <input type="button" placeholder="请选择工作经验" id="select_experience" class="selectr selectr_380" value="<?php echo ($job["work_year"]); ?>">
                                                <div class="boxUpDown boxUpDown_380 dn" id="box_experience" style="display:none">
                                                    <ul>
                                                        <li>不限</li>
                                                        <li>应届毕业生</li>
                                                        <li>1年以下</li>
                                                        <li>1-3年</li>
                                                        <li>3-5年</li>
                                                        <li>5-10年</li>
                                                        <li>10年以上</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>学历要求</td>
                                            <td>
                                                <input type="hidden" id="education" value="<?php echo ($job["edu"]); ?>" name="edu">
                                                <input type="button" placeholder="请选择学历要求" id="select_education" class="selectr selectr_380" value="<?php echo ($job["edu"]); ?>">
                                                <div class="boxUpDown boxUpDown_380 dn" id="box_education" style="display:none">
                                                    <ul>
                                                        <li>不限</li>
                                                        <li>大专</li>
                                                        <li>本科</li>
                                                        <li>硕士</li>
                                                        <li>博士</li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="btm">
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td width="85">
                                                职位诱惑
                                            </td>
                                            <td>
                                                <input type="text" placeholder="20字描述该职位的吸引力，如：福利待遇、发展前景等" value="<?php echo ($job["welfare"]); ?>" name="welfare" class="input_520" id="positionAdvantage">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>职位描述</td>
                                            <td>
                                                <span class="c9 f14">
                                                    (建议分条描述工作职责等。请勿输入公司邮箱、联系电话等外链，否则将自动删除)
                                                </span>
                                                <textarea name="desc" id="positionDetail" class="tinymce"><?php echo ($job["desc"]); ?></textarea>
                                                <span role="application" aria-labelledby="positionDetail_voice" id="positionDetail_parent" class="mceEditor defaultSkin">
                                                    <span class="mceVoiceLabel" style="display:none" id="positionDetail_voice">
                                                        富文本域
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td>工作地址</td>
                                            <td>
                                                <input type="text" placeholder="请输入详细的工作地址" value="<?php echo ($job["address"]); ?>" name="address" class="input_520" id="positionAddress">
                                                <!-- <div class="work_place f14">
                                                    我们将在职位详情页以地图方式精准呈现给用户
                                                    <a id="mapPreview" href="javascript:;">
                                                        预览地图
                                                    </a>
                                                </div> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="25">
                                                <span class="redstar"> * </span>
                                            </td>
                                            <td colspan="2">
                                                接收简历邮箱：
                                                <span id="receiveEmailVal">
                                                    <?php echo ($company["email"]); ?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25"></td>
                                            <td colspan="2">
                                                <!-- <input type="button" value="预览" id="jobPreview" class="btn_32"> -->
                                                <!-- <a id="jobPreview" href="javascript:;" class="btn_32" target="_blank">预览</a> -->
                                                <input type="submit" value="发布" id="formSubmit" class="btn_32">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </dd>
                    </dl>
                </div>
                <script src="/Public/HomeStyle/js/jobs.min.js" type="text/javascript"></script>
                <div class="clear"></div>
                <a rel="nofollow" title="回到顶部" id="backtop" style="display:none"></a>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="/Public/css2/widgets_fec497b.css">

<div id="footer">
        <div class="wrapper">
            <i class="footer_lagou_icon"></i>
            <div class="inner_wrapper">
                <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span></span><i></i></a>
                <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
                <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
                <a href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
                <a href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
                <a href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
                <a id="BizQQWPA" href="javascript:void(0);" rel="nofollow">在线交流</a>
                <span class="tel">服务热线：<em>400-605-9900 (9:00 -19:00)</em></span>
            </div>
            <div class="copy">
                <span><em>©</em>2015 Lagou </span>
                <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
                <span>京公网安备11010802017116号</span>
            </div>
        </div>
    </div>
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
        <script src="/Public/HomeStyle/js/popup.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $.extend({
                    sub : function(obj) {
                        var obj = $(obj);
                        $.ajax({
                            url : obj.attr('action'),
                            type : 'post',
                            data : obj.serialize(),
                            success : function(data) {
                                eval("var data="+data);
                                if (data.code > 0) {
                                    window.location.href = data.url;
                                } else {
                                    alert(data.msg);
                                }
                            }
                        })
                        return false;
                    }
                })

                $('#jobPreview').click(function() {
                    $.ajax({
                        url : "<?php echo U('Home/CompanyJob/preview');?>",
                        data : $(this).parents('form').serialize(),
                        type : 'post',
                        success : function(data) {
                            window.location.href = data.url;
                        }
                    })
                })
            })
        </script>
    </body>

</html>