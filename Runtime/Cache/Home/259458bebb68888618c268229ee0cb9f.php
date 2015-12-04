<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
    <head>
        <script id="allmobilize" charset="utf-8" src="/Public/HomeStyle/js/allmobilize.min.js">
        </script>
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="alternate" media="handheld" />
        <!-- end 云适配 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>
            内容运营-立方网-拉勾网-最专业的互联网招聘平台
        </title>
        <meta property="qc:admins" content="23635710066417756375" />
        <meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台"
        name="description">
        <meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台"
        name="keywords">
        <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
        <!-- <div class="web_root" style="display:none">h</div> -->
        <script type="text/javascript">
            var ctx = "h";
            console.log(1);
        </script>
        <link rel="Shortcut Icon" href="h/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/Public/css3/style.css"
        />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/external.min.css"
        />
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/popup.css"
        />
        <script src="/Public/HomeStyle/js/jquery.1.10.1.min.js" type="text/javascript">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.lib.min.js">
        </script>
        <script src="/Public/HomeStyle/js/ajaxfileupload.js" type="text/javascript">
        </script>
        <script src="/Public/HomeStyle/js/jquery-hbzx.js" type="text/javascript">
        </script>
        <script type="text/javascript">
            var youdao_conv_id = 271546;
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/conv.js">
        </script>
    </head>
    
    <body>
        <div id="body">
            <link href="/Public/css3/header.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/Public/css3/style_002.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/style.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/external.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/popup.css">

<script type="text/javascript" src="/Public/css3/jquery.js"></script>

<script type="text/javascript" src="/Public/css3/jquery_002.js"></script>

<script type="text/javascript" src="/Public/css3/ajaxfileupload.js"></script>

<script type="text/javascript" src="/Public/css3/timeCountDown.js"></script>
<script type="text/javascript" src="/Public/css3/additional-methods.js"></script>
<div id="lg_header">

            <!--C端头部黑色导航-->
        <!--C端头部黑色导航-->  
<div id="lg_tbar">
    <block name='top'>
        <div class="inner">

                <div class="lg_tbar_l">
                    <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                    <a href="<?php echo U('Home/CompanyReg/step');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
                </div>

                
                <ul class="lg_tbar_r reset">
                <?php if(session('?user')) :?>
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
                        <?php if(session('user')['type'] == 1) :?>
                        <li>
                            <a href="http://www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                        </li>
                        <li>
                            <a href="http://www.lagou.com/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                        </li>

                        <li>
                            <a href="<?php echo U('Home/CompanyReg/step');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
                        </li>
                        <?php else : ?>

                         <li>
                            <a href="http://www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我要招人</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                        </li>

                        <li>
                            <a href="<?php echo U('Home/CompanyReg/step');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
                        </li>

                        <?php endif ?>
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
                <?php else : ?>
                    <li>
                        <a href="<?php echo U('Home/Login/topLogin');?>" target='_blank' data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/Register/register');?>" target='_blank' class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div><!--end #lg_tbar-->

       <!--end #lg_tbar-->
        
            <!--C端头部白色导航-->
                <div id="lg_tnav">
        

        <div class="inner">
            <div class="lg_tnav_l">
                <a href="/index.php" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1>拉勾网</h1>
                </a> 
                            </div>
            <ul class="lg_tnav_wrap reset">
                <li>
                    <a href="<?php echo U('Home/Index/index');?>" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
                </li> 
                <li>
                    <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                </li>
                <!-- <li>
                    <a href="#" rel="nofollow">内容频道</a>
                </li> -->
            </ul>

        </div>

    </div><!--end #lg_tnav-->

        </div><!--end #lg_header-->


            <!-- end #header -->
            <div id="container">
                <div class="clearfix">
                    <div class="content_l">
                        <dl class="job_detail">
                            <dt>
                                <h1 title="内容运营">
                                    <em>
                                    </em>
                                    <div>
                                    </div>
                                    <?php echo ($arr["name"]); ?>
                                </h1>
                                <a class="jd_collection <?php echo ($showCol); ?>" href="<?php echo U('JobShow/collection',array('job_id'=>$arr['id'],'uid'=>$_SESSION['user']['id']));?>">
                                </a>
                            </dt>
                            
                            <dd class="job_request">
                                    <span class="red"><?php echo ($arr["salary_low"]); ?>k-<?php echo ($arr["salary_high"]); ?>k</span>
                                    <span><?php echo ($arr["city"]); ?></span> 
                                    <span><?php echo ($arr["work_year"]); ?></span>
                                    <span><?php echo ($arr["edu"]); ?></span> 
                                    <span><?php echo ($arr["nature"]); ?></span><br />
                                        职位诱惑 : <?php echo ($arr["welfare"]); ?>
                                    <div>发布时间:<?php echo (date('Y年m月d日',$arr["modify_time"])); ?></div>
                            </dd>
                            <!--</foreach>-->
                           
                            <dd class="job_bt">
                                <h3 class="description">
                                    职位描述
                                </h3>
                                <p>
                                <?php echo ($arr["desc"]); ?>
                                </p>
                            </dd>
                            <div class="saoma saoma_btm">
                                <div class="dropdown_menu">
                                    <div class="drop_l">
                                        <img src="/Public/HomeStyle/images/job_qr_btm.png" width="131" height="131"
                                        />
                                    </div>
                                    <div class="drop_r">
                                        <div class="drop_title">
                                        </div>
                                        <p>
                                            想知道HR在看简历嘛？
                                            <br />
                                            想在微信中收到面试通知？
                                            <br />
                                            <span>
                                                << 扫一扫，给你解决</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <dd>
                                <a href="<?php echo ($cl['address']); ?>" class="btn fr <?php echo ($cl['cls']); ?>">
                                    <?php echo ($cl['value']); ?>
                                </a>
                            </dd>
                        </dl>
                        <div id="weibolist">
                        </div>
                    </div>
                    <div class="content_r">
                        <dl class="job_company">
                            <dt>
                                <a href="<?php echo U('CompanyShow/Index',array('cid'=>$ayy['id']));?>" target="_blank">
                                    <img class="b2" src="<?php echo ($ayy["logo"]); ?>"width="80" height="80" alt="北京立方网信息技术有限公司" />
                                    <div>
                                        <h2 class="fl">
                                            <?php echo ($ayy["name"]); ?>
                                            <img src="/Public/HomeStyle/images/valid.png" width="15" height="19" alt="拉勾认证企业"
                                            />
                                            <span class="dn">
                                                拉勾认证企业
                                            </span>
                                        </h2>
                                    </div>
                                </a>
                            </dt>
                            <dd>
                                <ul class="c_feature reset">
                                    <li>
                                        <span>
                                            领域
                                        </span>
                                        <?php echo ($ayy['trade']); ?>
                                    </li>
                                    <li>
                                        <span>
                                            规模
                                        </span>
                                        <?php echo C('company_scale')[$ayy['scale']];?>
                                    </li>
                                    <li>
                                        <span>
                                            主页
                                        </span>
                                        <a href="<?php echo ($ayy["web"]); ?>" target="_blank" title="" rel="nofollow">
                                            <?php echo ($ayy["web"]); ?>
                                        </a>
                                    </li>
                                </ul>
                                <h4>
                                    发展阶段
                                </h4>
                                <ul class="c_feature reset">
                                    <li>
                                        <span>
                                            目前阶段
                                        </span>
                                        <?php echo C('company_stage')[$ayy['stage']];?>
                                    </li>
                                </ul>
                                <h4>
                                    工作地址
                                </h4>
                                <div>
                                    <?php echo ($arr["address"]); ?>
                                </div>
                            </dd>
                        </dl>
                        <a href="h/subject/s_zhouyou.html?utm_source=BD__lagou&utm_medium=&utm_campaign=zhouyou"
                        target="_blank" class="eventAd">
                            <img src="/Public/HomeStyle/images/zhouyou.jpg" width="280" height="135"
                            />
                        </a>
                    </div>
                </div>
                <input type="hidden" value="" name="userid" id="userid" />
                <input type="hidden" value="" name="type" id="resend_type" />
                <input type="hidden" value="140204" id="jobid" />
                <input type="hidden" value="683" id="companyid" />
                <input type="hidden" value="" id="positionLng" />
                <input type="hidden" value="" id="positionLat" />
                <div id="tipOverlay">
                </div>
                <!-------------------------------------弹窗lightbox ----------------------------------------->
                <div style="display:none;">
                    <!-- 设置默认投递简历 -->
                    <div id="setResume" class="popup" style="height:280px;">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5">
                                    请选择你要投出去的简历：
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form id="resumeSetForm" class="resumeSetForm">
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume1" value="1" />
                                            在线简历：
                                            <span class="red">
                                                在线简历还不完善，请完善后选择投递
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="jianli.html" target="_blank">
                                                修改
                                            </a>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume0" value="0" />
                                            附件简历：
                                            <span class="uploadedResume red">
                                                暂无附件简历
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="h/nearBy/downloadResume" class="downloadResume dn">
                                                下载
                                            </a>
                                            <span class="dn">
                                                |
                                            </span>
                                            <a target="_blank" title="上传附件简历" class="reUpload">
                                                上传附件简历
                                            </a>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume1"
                                            type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume1')"
                                            />
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <span class="error" style="display:none;">
                                            只支持word、pdf、ppt、txt、wps格式文件，请重新上传
                                        </span>
                                        <label class="bgPink">
                                            默认使用此简历直接投递，下次不再提示
                                        </label>
                                        <span class="setTip error">
                                        </span>
                                        <input type="submit" class="btn_profile_save btn_s" value="保存设置" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#setResume-->
                    <!-- 投递简历时 - 设置默认投递简历 -->
                    <div id="setResumeApply" class="popup" style="height:280px;">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5">
                                    请选择你要投出去的简历：
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form id="resumeSendForm" class="resumeSetForm">
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume1" value="1" />
                                            在线简历：
                                            <span class="red">
                                                在线简历还不完善，请完善后选择投递
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="jianli.html" target="_blank">
                                                修改
                                            </a>
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <label class="radio">
                                            <input type="radio" name="resumeName" class="resume0" value="0" />
                                            附件简历：
                                            <span class="uploadedResume red">
                                                暂无附件简历
                                            </span>
                                        </label>
                                        <div class="setBtns">
                                            <a href="h/nearBy/downloadResume" class="downloadResume dn">
                                                下载
                                            </a>
                                            <span class="dn">
                                                |
                                            </span>
                                            <a target="_blank" title="上传附件简历" class="reUpload">
                                                上传附件简历
                                            </a>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume2"
                                            type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','reUploadResume2')"
                                            />
                                        </div>
                                        <div class="clear">
                                        </div>
                                        <span class="error" style="display:none;">
                                            只支持word、pdf、ppt、txt、wps格式文件，请重新上传
                                        </span>
                                        <label class="bgPink">
                                            <input type="checkbox" checked="checked" />
                                            默认使用此简历直接投递，下次不再提示
                                        </label>
                                        <span class="setTip error">
                                        </span>
                                        <input type="submit" class="btn_profile_save btn_s" value="确认投递简历" />
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#setResumeApply-->
                    <!-- 上传简历 -->
                    <div id="uploadFile" class="popup">
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input tabindex="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3"
                                            name="newResume" id="resumeUpload" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')"
                                            />
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    支持word、pdf、ppt、txt、wps格式文件
                                    <br />
                                    文件大小需小于10M
                                </td>
                            </tr>
                            <tr>
                                <td align="left" style="color:#dd4a38; padding-top:10px;">
                                    注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <img src="/Public/HomeStyle/images/loading.gif" width="55" height="16"
                                    id="loadingImg" style="visibility: hidden;" alt="loading" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#uploadFile-->
                    <!-- 简历上传成功 -->
                    <div id="uploadFileSuccess" class="popup">
                        <h4>
                            简历上传成功！
                        </h4>
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <p>
                                        你可以将简历投给你中意的公司了。
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a href="javascript:top.location.reload();" class="btn_s">
                                        确&nbsp;定
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#uploadFileSuccess-->
                    <!-- 登录框 -->
                    <!--/#loginPop-->
                    <!-- 投简历成功前填写基本信息 -->
                    <div id="infoBeforeDeliverResume" class="popup" style="height:300px; overflow:visible;">
                        <div class="f18">
                            为方便所投递企业HR查阅，请确认个人信息
                        </div>
                        <form id="basicInfoForm" method="post">
                            <table width="100%">
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="name" placeholder="姓名" />
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="degree" value="" id="degree" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_degree" value="最高学历" />
                                        <div id="box_degree" class="boxUpDown boxUpDown_190 dn">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="workyear" value="" id="workyear" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_workyear" value="工作年限" />
                                        <div id="box_workyear" class="boxUpDown boxUpDown_190 dn">
                                        </div>
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="hidden" name="expectCity" value="" id="expectCity" />
                                        <input type="button" class="profile_select_190 profile_select_normal"
                                        id="select_expectCity" value="期望工作城市" />
                                        <div id="box_expectCity" class="boxUpDown boxUpDown_596 dn">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="tel" placeholder="联系电话" />
                                    </td>
                                    <td valign="middle">
                                        <span class="redstar">
                                            *
                                        </span>
                                    </td>
                                    <td>
                                        <input type="text" name="email" placeholder="邮箱地址" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td colspan="3">
                                        <input type="hidden" name="type" value="" />
                                        <input type="submit" class="btn" value="确认并投递" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!--/#infoBeforeDeliverResume-->
                    <!-- 上传附件简历操作说明-重新上传 -->
                    <div id="fileResumeUpload" class="popup">
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="f18 mb10">
                                        请上传标准格式的word简历
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="f16">
                                        操作说明：
                                        <br />
                                        打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a class="inline btn" href="#uploadFile" title="上传附件简历">
                                        重新上传
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#fileResumeUpload-->
                    <!-- 上传附件简历操作说明-重新上传 -->
                    <div id="fileResumeUploadSize" class="popup">
                        <table width="100%">
                            <tr>
                                <td>
                                    <div class="f18 mb10">
                                        上传文件大小超出限制
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="f16">
                                        提示：
                                        <br />
                                        单个附件不能超过10M，请重新选择附件简历！
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a class="inline btn" href="#uploadFile" title="上传附件简历">
                                        重新上传
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumeConfirm-->
                    <!-- 投简历成功前二次确认 -->
                    <div id="deliverResumeConfirm" class="popup">
                        <table width="100%">
                            <tr>
                                <td class="msg">
                                    <div class="f18">
                                        你的简历中：
                                    </div>
                                    <div class="f16 count">
                                        <span class="f18 confirm_field">
                                            学历、工作年限、期望工作城市
                                        </span>
                                        与该职位要求不匹配，确认要投递吗？
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="hidden" name="type" value="" />
                                    <a href="javascript:sendResume(,140204,true,true);" class="btn">
                                        确认投递
                                    </a>
                                    <a href="javascript:;" class="btn_s">
                                        放弃投递
                                    </a>
                                    <a href="javascript:;" class="f20 edit_field">
                                        修改信息
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumeConfirm-->
                    <!-- 投简历成功 -->
                    <div id="deliverResumesSuccess" class="popup" style="width:440px;padding-bottom:10px;">
                        <table width="100%">
                            <tr class="drawGGJ">
                                <td align="center">
                                    <p class="font_16 count">
                                    </p>
                                    <p class="font_16 share dn">
                                        邀请好友成功注册拉勾，可提升每日投递量 &nbsp;&nbsp;
                                        <a href="h/share/invite.html" target="_blank">
                                            邀请好友>>
                                        </a>
                                    </p>
                                </td>
                            </tr>
                            <tr class="drawQD">
                                <td align="center">
                                    <a href="javascript:top.location.reload();" class="btn_s">
                                        确&nbsp;定
                                    </a>
                                </td>
                            </tr>
                            <tr class="weixinQR dn">
                                <td>
                                    <div class="weixin">
                                        <div class="qr">
                                            <img src="" width="120" height="120" />
                                            <div>
                                                [仅限本人使用]
                                            </div>
                                        </div>
                                        <div class="qr_text">
                                            想知道HR是否看过你的简历？
                                            <br />
                                            想在微信中收到面试通知？
                                            <br />
                                            <span>
                                                << 微信扫一扫，一并解决</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumesSuccess-->
                    <!-- 投递时，一个简历都没有弹窗 -->
                    <div id="sendNoResume" class="popup">
                        <table width="100%">
                            <tr>
                                <td class="f18 c5" align="center">
                                    你还没有可以投递的简历呢
                                </td>
                            </tr>
                            <tr>
                                <td class="c5" align="center">
                                    请上传附件简历或填写在线简历后再投递吧~
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume"
                                            id="resumeUpload2" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload2')"
                                            />
                                        </a>
                                    </form>
                                    <a class="btn" href="jianli.html" target="_blank">
                                        完善在线简历
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#sendNoResume-->
                    <!-- 没有简历请上传 -->
                    <div id="deliverResumesNo" class="popup">
                        <table width="100%">
                            <tr>
                                <td align="center">
                                    <p class="font_16">
                                        你在拉勾还没有简历，请先上传一份
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <form>
                                        <a href="javascript:void(0);" class="btn_addPic">
                                            <span>
                                                选择上传文件
                                            </span>
                                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume"
                                            id="resumeUpload1" class="filePrew" type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')"
                                            />
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    支持word、pdf、ppt、txt、wps格式文件，大小不超过10M
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--/#deliverResumesNo-->
                    <!-- 激活邮箱 登录邮箱未验证时， 点击上传附件简历、申请职位、订阅职位、发布职位出现该弹窗 -->
                    <div id="activePop" class="popup" style="height:240px;">
                        <h4>
                            登录邮箱未验证
                        </h4>
                        <p>
                            请验证你的登录邮箱以使用拉勾网的所有功能！
                        </p>
                        <p>
                            我们已将验证邮件发送至：
                            <a>
                            </a>
                            ，请点击邮件内的链接完成验证。
                        </p>
                        <p>
                            <a href="javascript:void(0)" id="resend">
                                重新发送验证邮件
                            </a>
                            |
                            <a href="register.html" target="_blank">
                                换个邮箱？
                            </a>
                        </p>
                    </div>
                    <!--/#activePop-->
                    <!-- 激活邮箱 验证邮件发送成功弹窗 -->
                    <div id="resend_success" class="popup">
                        <p>
                            我们已将激活邮件发送至：
                            <a>
                            </a>
                            ，请点击邮件内的链接完成验证。
                        </p>
                    </div>
                    <!--/#resend_success-->
                    <!--地图弹窗-->
                    <div id="baiduMap" class="popup">
                        <div id="allmap">
                        </div>
                    </div>
                    <!--/#baiduMap-->
                </div>
                

        </div>
        <!-- end #body -->
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
        <script type="text/javascript" src="/Public/HomeStyle/js/core.min.js">
        </script>
        <script type="text/javascript" src="/Public/HomeStyle/js/popup.min.js">
        </script>
        <!-- -->
    </body>

</html>