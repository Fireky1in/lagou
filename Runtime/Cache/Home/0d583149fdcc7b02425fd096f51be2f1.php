<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js csstransitions">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" charset="utf-8" async="" src="/Public/css/contains.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="/Public/css/taskMgr.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="/Public/css/views.js"></script>
    <script charset="utf-8" src="/Public/css/v.js"></script>
    <script async="" src="/Public/css/analytics.js"></script>
    <script async="" src="/Public/css/a.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1999 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta property="qc:admins" content="23635710066417756375">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6">

    <meta charset="UTF-8">

    <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">

    <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">

    <title>拉勾网-最专业的互联网招聘平台</title>

    <!-- common -->
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6">

    <!-- <div class="web_root"  style="display:none">http://www.lagou.com</div>
-->
<script type="text/javascript">
var ctx = "http://www.lagou.com";
// var rctx = "http://hr.lagou.com";
// var pctx = "http://www.lagou2.com";
// var crctx = "http://www.lagou.com";
// var sctx = "http://suggest.lagou.com";
// var chrctx = "http://c.hr.lagou.com";

// var frontLogin = "http://www.lagou.com/frontLogin.do";
// var frontLogout = "http://www.lagou.com/frontLogout.do";
// var frontRegister = "http://www.lagou.com/frontRegister.do";

</script>

<!-- header/global_domain -->

<script type="text/javascript">
var GLOBAL_DOMAIN =  window.GLOBAL_DOMAIN || {
    ctx : "http://www.lagou2.com",
    rctx : "http://hr.lagou.com",
    pctx : "http://www.lago2.com",
    actx : "http://account.lagou.com",
    paictx : "http://pai.lagou.com",
    sctx : "http://suggest.lagou.com",
};
</script>

<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">

<!-- 主头部样式 -->
<link href="/Public/css/header.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/Public/css/style.css">
<link rel="stylesheet" type="text/css" href="/Public/css/style(1).css">
<link rel="stylesheet" type="text/css" href="/Public/css/external.min.css">
<link rel="stylesheet" type="text/css" href="/Public/css/popup.css">

<script type="text/javascript" src="/Public/css/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="/Public/css/jquery.lib.min.js"></script>

<script type="text/javascript" src="/Public/css/ajaxfileupload.js"></script>

<script type="text/javascript" src="/Public/css/timeCountDown.js"></script>

<script type="text/javascript" src="/Public/css/additional-methods.js"></script>

<!--[if lte IE 8]>
<script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015102818"></script>
<![endif]-->

<script defer="" id="_lgpassport_" data-css-site="1" data-css-popup="1" src="/Public/css/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){
                //if(!jQuery.cookie('login') || jQuery.cookie('login') == 'false'){


            //alert("not log in ");
            /* 设置自动登录监听器 */
            PASSPORT.on('autologin:succ', function(userInfo) {
                window.location.reload();
            });
            PASSPORT.on('autologin:fail', function(data) {

            });
            // 触发自动登录
            PASSPORT.auto();

            /* 设置弹窗登录监听器 */
            PASSPORT.on('popuplogin:succ', function(data) {
                window.location.reload();
            });
            PASSPORT.on('popuplogin:fail', function(data) {

            });

            // 触发弹窗登录
            //PASSPORT.popup();

            //var passport_login_pop = $('.passport_login_pop');
            $('.passport_login_pop').each(function(){
                $(this).click(function(){
                    PASSPORT.popup();
                });
            })

                //}

    }
</script>

<!--copy帐号系统的passport.html-->
<script type="text/javascript">
    function noticeInit(){
        var urls = {
            //调用C端用户的notice数字
            getPushNoticeOfC : "http://www.lagou.com/common/getPushNoticeOfC.json",
            //清除C端用户的notice
            clearPushNoticeOfC : "http://www.lagou.com/common/clearPushNoticeOfC.json",
        }

        //调用C端用户的notice数字
        PASSPORT.util.rpc({
            params:{},
            url: urls.getPushNoticeOfC,
            succ:function(data){
                var result = data.content.data;
                if(data.state == "1"){
                    var wraperNoticeObj = $('#lg_tbar .inner');
                    var noticePopTip = ['<div id="noticeTip">',/*'<span class="bot"></span>','<span class="top"></span>',*/'<a href="javascript:;" class="closeNT"></a>'];

                    //推送投递反馈数
                    if(result.isShowPushNotice){
                        var counter = result.pushNoticeEntity;
                        if(counter && counter > 0 ){
                            noticePopTip.push('<a href="http://www.lagou.com/mycenter/delivery.html?tag=0&r=0" data-noticetype="0" class="notice_tip" target="_blank" data-lg-tj-id="7m00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_c,新投递反馈数,number"><strong>'+counter+'</strong>条新投递反馈</a>');

                            //投递箱红点
                            $("#noticeDot_delivery").removeClass('dn');
                        }
                    }

                    //推送plus邀约
                    if(result.isShowPlusTips){
                        noticePopTip.push('<a href="http://www.lagou.com/mycenter/invitation.html" data-noticetype="1" class="notice_tip" target="_blank" data-lg-tj-id="7n00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_c,新职位邀请数,number"><strong>'+result.plusTipsCount+'</strong>条新职位邀请</a>');
                        //邀约红点
                        $(".user_dpdown .noticeDot").removeClass('dn')

                    }

                    noticePopTip.push('</div>');

                    if(result.isShowPushNotice || result.isShowPlusTips){
                        //弹出tip
                        wraperNoticeObj.append(noticePopTip.join(''));
                    }

                    //全部已读
                    $('#noticeTip a.closeNT').click(function(){
                        //与后台交互，消息标识为已读
                        //clearNoticeTip(urls.clearPushNoticeOfC);
                        PASSPORT.util.rpc({
                            params:{},
                            url:urls.clearPushNoticeOfC,
                            succ:function(data){
                                $('#noticeTip').remove();
                                $(".noticeDot").addClass("dn");
                            },
                            fail:function(data){
                                 console.log('fail:' + data);
                            }
                        });
                    });
                }

                //C端消息绑定单击事件
                //弹窗部分
                var notice_tip = $("#noticeTip .notice_tip");
                notice_tip.bind("click",function(){
                    var _this = $(this);
                    //获取当前点击的消息类型
                    var type = _this.data("noticetype");
                    //告诉后台哪种类型的消息一经被查看
                    PASSPORT.util.rpc({
                        params:{"type":type},
                        url:urls.clearPushNoticeOfC,
                        succ:function(data){
                            _this.remove();
                            if(type == 0){
                                $("#noticeDot_delivery").addClass('dn');
                            }else if(type == 1){
                                $(".user_dpdown .noticeDot").addClass('dn')
                            }
                            if($("#noticeTip .notice_tip").length <= 0){
                                $('#noticeTip').remove();
                            }
                        },
                        fail:function(data){
                             console.log('fail:' + data);
                        }
                    });
                });
                //红点链接
                var deliveryLink = $("#deliveryLink");
                deliveryLink.click(function(event){
                    var aimTips = $("#noticeTip .notice_tip[data-noticetype='0']")
                    if(aimTips){
                        aimTips.trigger('click');
                    }
                    event.stopPropagation();
                });

                var invitationLink = $("#invitationLink");
                invitationLink.click(function(event){
                    var aimTips = $("#noticeTip .notice_tip[data-noticetype='1']")
                    if(aimTips){
                        aimTips.trigger('click');
                    }
                    event.stopPropagation();
                });

            },
            fail:function(data){
                console.log('fail:' + data);
            }
        });

    }

</script>

<script src="/Public/css/hotword"></script>
<link href="/Public/css/style(2).css" rel="stylesheet" class="lazyload" charset="utf-8">
<script src="/Public/css/stringifyJSON.min.js" class="lazyload" charset="utf-8"></script>
<link href="/Public/css/loginPop.css" rel="stylesheet" class="lazyload" charset="utf-8">
<!-- <script src="/Public/css/md5.js" class="lazyload" charset="utf-8"></script>
-->
</head>
<body>
<iframe style="display: none;"></iframe>
<style type="text/css">.WPA3-SELECT-PANEL { z-index:2147483647; width:463px; height:292px; margin:0; padding:0; border:1px solid #d4d4d4; background-color:#fff; border-radius:5px; box-shadow:0 0 15px #d4d4d4;}.WPA3-SELECT-PANEL * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none; font-family:Microsoft YaHei,Simsun;}.WPA3-SELECT-PANEL a { cursor:auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-TOP { height:25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE { float:right; display:block; width:47px; height:25px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE:hover { background-position:0 -25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-MAIN { padding:23px 20px 45px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-GUIDE { margin-bottom:42px; font-family:"Microsoft Yahei"; font-size:16px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-SELECTS { width:246px; height:111px; margin:0 auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT { float:right; display:block; width:88px; height:111px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat 0 -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT:hover { background-position:-88px -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-AIO-CHAT { float:left;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ { display:block; width:76px; height:76px; margin:6px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat -50px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ-ANONY { background-position:-130px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-LABEL { display:block; padding-top:10px; color:#00a2e6; text-align:center;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-BOTTOM { padding:0 20px; text-align:right;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-INSTALL { color:#8e8e8e;}</style>
<style type="text/css">.WPA3-CONFIRM { z-index:2147483647; width:285px; height:141px; margin:0; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAACNCAMAAAC9pV6+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU5QUIyQzVCNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU5QUIyQzVDNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTlBQjJDNTk1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTlBQjJDNUE1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6QoyAtAAADAFBMVEW5xdCkvtNjJhzf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) no-repeat;}.WPA3-CONFIRM { *background-image:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/panel.png);}.WPA3-CONFIRM * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none;}.WPA3-CONFIRM * { font-family:Microsoft YaHei,Simsun;}.WPA3-CONFIRM .WPA3-CONFIRM-TITLE { height:40px; margin:0; padding:0; line-height:40px; color:#2b6089; font-weight:normal; font-size:14px; text-indent:80px;}.WPA3-CONFIRM .WPA3-CONFIRM-CONTENT { height:55px; margin:0; line-height:55px; color:#353535; font-size:14px; text-indent:29px;}.WPA3-CONFIRM .WPA3-CONFIRM-PANEL { height:30px; margin:0; padding-right:16px; text-align:right;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON { position:relative; display:inline-block!important; display:inline; zoom:1; width:99px; height:30px; margin-left:10px; line-height:30px; color:#000; text-decoration:none; font-size:12px; text-align:center;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON-FOCUS { width:78px;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON .WPA3-CONFIRM-BUTTON-TEXT { line-height:30px; text-align:center; cursor:pointer;}.WPA3-CONFIRM-CLOSE { position:absolute; top:7px; right:7px; width:10px; height:10px; cursor:pointer;}</style>

<div id="body">

<!--C端头部通栏广告位-->
<!-- <div id="top_bannerC">
<a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div>
-->
<!-- 验证注册邮箱 -->

<div id="lg_header">
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
                

</div>
<!--end #lg_header-->

<!-- 数据展示类接口需要版本号 -->
<input type="hidden" id="version" value="1.5.6_2015102818">

<div id="container" style="min-height: 844px;">

    <link rel="stylesheet" type="text/css" href="/Public/css/jobhopp.css">
    <div id="sidebar">
        <div class="mainNavs">
            
            <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="menu_box">
                    <div class="menu_main" id="job_hopping">
                        <h2>
                            <?php echo ($vo["name"]); ?>
                            <span></span>
                        </h2>
                        <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = array_slice($vo["son"],0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mv): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Search/lists');?>?job=<?php echo ($mv['reson']['0']['name']); ?>" data-lg-tj-id="4A00" data-lg-tj-no="0009" data-lg-tj-cid="idnull"><?php echo ($mv['reson']['0']['name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="menu_sub dn" style="top: 0px;">
                        <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><dl class="reset">
                                <dt>
                                    <a href="<?php echo U('Home/Search/lists');?>?job=<?php echo ($vos["name"]); ?>" data-lg-tj-id="4H00" data-lg-tj-no="0001" data-lg-tj-cid="idnull"><?php echo ($vos["name"]); ?></a>
                                </dt>
                                <dd>
                                    <?php if(is_array($vos["reson"])): $i = 0; $__LIST__ = $vos["reson"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Search/lists');?>?job=<?php echo ($vv["name"]); ?>" data-lg-tj-id="4O00" data-lg-tj-no="0115" data-lg-tj-cid="idnull"><?php echo ($vv["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                </dd>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- <a class="subscribe" href="http://www.lagou.com/s/subscribe.html" target="_blank">订阅职位</a>
    -->
    <div class="subscribe">
        <a href="http://www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow" data-lg-tj-id="4g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
            <span>订阅职位</span> <i id="n_rss" href="http://www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow">&nbsp;</i>
        </a>
    </div>
    <!-- <div class="suggestCity"> <strong>北京站</strong>
    <span id="changeCity_btn">[切换城市]</span>
</div>
-->
</div>
<div class="content">
<div id="search_box">
    <form id="searchForm" name="searchForm" action="<?php echo U('Home/Search/lists');?>" method="get">
        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
        <input type="text"  name='job' id="search_input" tabindex="1" maxlength="64" autocomplete="off" value="" placeholder="请输入职位名称" class="ui-autocomplete-input" style="color: rgb(153, 153, 153);">
        <input type="hidden" name="labelWords" id="labelWords" value="">
        <input type="hidden" name="fromSearch" id="fromSearch" value="true">
        <input type="hidden" name="suginput" id="suginput">

        <input type="submit" id="search_button" value="搜索" data-lg-tj-id="4V00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></form>
    <input type="hidden" id="search_py" value="">
    <input type="hidden" id="isIndex" value="true"></div>
<style>
.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #00b38a;border-top: none;}
.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
.ui-menu-item a{display:block;overflow:hidden;}
</style>
<dl class="hotSearch">
    <dt>热门搜索：</dt>
    <dd>
        <a href="http://www.lagou.com/zhaopin/PHP" class="current">PHP</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/xinmeitiyunying" class="current">新媒体运营</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/shichangtuiguang" class="current">市场推广</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/.NET" class="current">.Net</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/Android">Android</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/Python">Python</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/BD">BD</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/zhaopin/huodongcehua">活动策划</a>
    </dd>
    <dd>
        <a href="http://www.lagou.com/app/download.html?source=search_app" class="current">拉勾APP</a>
    </dd>
</dl>
<!-- <script src="/Public/css/adv-sim.js"></script>
-->
<script type="text/javascript" src="/Public/css/search.js"></script>
<div id="home_banner">

<ul class="banner_bg" style="height: 480px; margin-top: 0px;">
    <?php if(is_array($ads)): $i = 0; $__LIST__ = $ads;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="banner_bg_<?php echo ($i+1); ?> current">
            <a href="http://www.lagou.com/topic/tengxuntouzilianhe.html" target="_blank" data-lg-tj-id="4k00" data-lg-tj-no="0001" data-lg-tj-cid="503">
                <img src="<?php echo ($vo["pic"]); ?>" width="612" height="160" alt="<?php echo ($vo["des"]); ?>"></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="banner_control"> <em style="top: 0px;"></em>
    <ul class="thumbs">
        <?php if(is_array($ads)): $i = 0; $__LIST__ = $ads;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="thumbs_<?php echo ($i); ?> current"> <i></i>
                <img src="<?php echo ($vo["spic"]); ?>" height="42"></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
</div>
<!--/#main_banner-->

<ul id="da-thumbs" class="da-thumbs">

<?php if(is_array($bnav)): $i = 0; $__LIST__ = $bnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($i == 5): ?>class="last"
        <?php else: endif; ?>
    >
    <a href="http://www.lagou.com/gongsi/16549.html" target="_blank" data-lg-tj-id="4l00" data-lg-tj-no="0001" data-lg-tj-cid="980">
        <img src="<?php echo ($vo["logo"]); ?>" width="113" height="113" alt="<?php echo ($vo["name"]); ?>">
        <div class="hot_info" style="display: block; left: 100%; top: 0px; transition: all 300ms ease;">
            <h2 title="<?php echo ($vo["short_name"]); ?>"><?php echo ($vo["short_name"]); ?></h2> <em></em>
            <p title="国内排名第一的女生闲置交易平台"><?php echo ($vo["one_desc"]); ?></p>
        </div>
    </a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<ul class="reset hotabbing">
<li class="current" data-lg-tj-id="4X00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">热门职位</li>
<li>最新职位</li>
</ul>

<div id="hotList">
<ul class="reset hot_posHotPosition position_list init_joblist">
<?php if(is_array($jobs)): $i = 0; $__LIST__ = $jobs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="position_list_item" data-jobid="<?php echo ($vo["id"]); ?>" data-positionid="<?php echo ($vo["id"]); ?>" data-salary="<?php echo ($vo["salary_low"]); ?>-<?php echo ($vo["salary_high"]); ?>" data-company="<?php echo ($vo["company_id"]); ?>" data-positionname="<?php echo ($vo["name"]); ?>">
        <div class="pli_top">
            <div class="fl pli_top_l">
                <div class="position_name">
                    <!--  -->
                    <h2 class="fl">
                        <a href="<?php echo U('Home/JobShow/index');?>?jid=<?php echo ($vo["id"]); ?>" target="_blank" class="position_link fl wordCut" data-index="1" data-lg-tj-id="4m00" data-lg-tj-no="0002" data-lg-tj-cid="964419"><?php echo ($vo["name"]); ?></a>
                        <span>[<?php echo ($vo["city"]); ?>]</span>
                    </h2>
                    <!-- 此处需要和后台确认 -->
                    <span class="fl"><?php echo (date('Y-m-d',$vo["create_time"])); ?></span>
                </div>
                <div>
                    <span class="salary fl"><?php echo ($vo["salary_low"]); ?>k-<?php echo ($vo["salary_high"]); ?>k</span>
                    <span>
                        <!-- <i class="experience"></i>
                    &nbsp;  -->经验<?php echo ($vo["work_year"]); ?>
                </span>
                /
                <span><?php echo ($vo["edu"]); ?></span>
            </div>
        </div>
        <div class="fr pli_top_r">
            <div class="company_name wordCut">
                <a href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($vo["cid"]); ?>" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0002" data-lg-tj-cid="39451"><?php echo ($vo["short_name"]); ?></a>
            </div>
            <div class="industry wordCut">
                <span><?php echo ($vo["trade"]); ?></span>
                /
                <span><?php echo C('company_stage')[$vo['stage']];?></span>
            </span>
        </div>
    </div>
</div>
<div class="pli_btm">
    <div class="pli_btm_l fl wordCut">“<?php echo ($vo["welfare"]); ?>”</div>
    <div class="pli_btm_r fl">
        <?php if(is_array($vo["tags"])): $i = 0; $__LIST__ = $vo["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><span><?php echo ($vos); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
<a href="<?php echo U('Home/Search/lists');?>" class="btn fr mr25" target="_blank" data-lg-tj-id="4p00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</ul>

<ul class="new_posHotPosition position_list reset" style="display:none;">
<?php if(is_array($redjobs)): $i = 0; $__LIST__ = $redjobs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="position_list_item" data-jobid="<?php echo ($vo["id"]); ?>" data-positionid="<?php echo ($vo["id"]); ?>" data-salary="<?php echo ($vo["salary_low"]); ?>-<?php echo ($vo["salary_high"]); ?>" data-company="<?php echo ($vo["company_id"]); ?>" data-positionname="<?php echo ($vo["name"]); ?>">
<div class="pli_top">
    <div class="fl pli_top_l">
        <div class="position_name">
            <!--  -->
            <h2 class="fl">
                <a href="<?php echo U('Home/JobShow/index');?>?jid=<?php echo ($vo["id"]); ?>" target="_blank" class="position_link fl wordCut" data-index="1" data-lg-tj-id="4m00" data-lg-tj-no="0002" data-lg-tj-cid="964419"><?php echo ($vo["name"]); ?></a>
                <span>[<?php echo ($vo["city"]); ?>]</span>
            </h2>
            <!-- 此处需要和后台确认 -->
            <span class="fl"><?php echo (date('Y-m-d',$vo["create_time"])); ?></span>
        </div>
        <div>
            <span class="salary fl"><?php echo ($vo["salary_low"]); ?>k-<?php echo ($vo["salary_high"]); ?>k</span>
            <span>
                <!-- <i class="experience"></i>
            &nbsp;  -->经验<?php echo ($vo["work_year"]); ?>
        </span>
        /
        <span><?php echo ($vo["edu"]); ?></span>
    </div>
</div>
<div class="fr pli_top_r">
    <div class="company_name wordCut">
        <a href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($vo["cid"]); ?>" target="_blank" data-lg-tj-id="4n00" data-lg-tj-no="0002" data-lg-tj-cid="39451"><?php echo ($vo["short_name"]); ?></a>
    </div>
    <div class="industry wordCut">
        <span><?php echo ($vo["trade"]); ?></span>
        /
        <span><?php echo C('company_stage')[$vo['stage']];?></span>
    </span>
</div>
</div>
</div>
<div class="pli_btm">
<div class="pli_btm_l fl wordCut">“<?php echo ($vo["welfare"]); ?>”</div>
<div class="pli_btm_r fl">
<?php if(is_array($vo["tags"])): $i = 0; $__LIST__ = $vo["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><span><?php echo ($vos); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
<a href="<?php echo U('Home/Search/lists');?>" class="btn fr mr25" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
</ul>
</div>

<div class="clear"></div>

<div id="linkbox">
<dl>
<dt>友情链接</dt>
<dd>
<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a>
<span>|</span><?php endforeach; endif; else: echo "" ;endif; ?>
<a href="http://www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">更多</a>
</dd>
</dl>
</div>
</div>
<input type="hidden" value="" name="userid" id="userid">
<!-- <div id="qrSide">
<a></a>
</div>
-->
<!--  -->
<?php if(!session('?user')): ?>
<div id="loginToolBar" style="bottom: 0px;">
<div>
<em></em>
<img src="/Public/css/footbar_logo.png" width="138" height="45">
<span class="companycount">
<i style="background-position-y: -270px;"></i>
<i style="background-position-y: -120px;"></i> <b></b>
<i style="background-position-y: -30px;"></i>
<i style="background-position-y: -180px;"></i>
<i style="background-position-y: -150px;"></i>
</span>
<span class="positioncount">
<i style="background-position-y: -30px;"></i> <b></b>
<i style="background-position-y: -30px;"></i>
<i style="background-position-y: -180px;"></i>
<i style="background-position-y: -210px;"></i>
<b></b>
<i style="background-position-y: -30px;"></i>
<i style="background-position-y: -60px;"></i>
<i style="background-position-y: -30px;"></i>
</span>
<a class="bar_login" href="javascript:;">
<i></i>
</a>

<script type="text/javascript">
            $('.bar_login').click(function(){
                $('#userinfo').html('');
                $('#login_beError').html('');
                $('#bbgg').fadeIn();
                $('#colorbox').fadeIn();
            });
        </script>
<div class="right">
<a href="<?php echo U('Home/Register/register');?>" onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;button&#39;, &#39;click&#39;, &#39;register&#39;])" class="bar_register" id="bar_register" target="_blank" data-lg-tj-id="4t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
<i></i>
</a>
</div>
<input type="hidden" id="cc" value="94165">
<input type="hidden" id="cp" value="1167121"></div>
</div>
<?php endif ?>

<div id='bbgg' style="width:9000px;height:2000px;background:url(./Public/css/overlay.png);position:fixed;z-index:9999999;top:0px;left:0px;display:none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display:none; visibility: visible; top: 76px;z-index:99999999; left: 360px; position: fixed; width: 656px; height: 370px; opacity: 1; cursor: auto;">
<div id="cboxWrapper" style="height: 370px; width: 656px;">
<div>
<div id="cboxTopLeft" style="float: left;"></div>
<div id="cboxTopCenter" style="float: left; width: 630px;"></div>
<div id="cboxTopRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxMiddleLeft" style="float: left; height: 344px;"></div>
<div id="cboxContent" style="float: left; width: 630px; height: 344px;">
<div id="cboxLoadedContent" style="width: 630px; overflow: auto; height: 300px;">
<div style="height:240px;" class="popup" id="loginPop">
<form method="post" id="login_form_popup">
<input type="text" placeholder="请输入登录邮箱地址或手机号" tabindex="1" name="email" id="email" autofocus>
<div id='userinfo' style="height:20px;line-height:20px;color:red"></div>
<input type="password" placeholder="请输入密码" tabindex="2" name="password" id="password">
<div id='pwdinfo' style="height:20px;line-height:20px;color:red"></div>
<span id="login_beError" style="height:20px;line-height:20px;" class="error"></span>
<label for="remember" class="fl">
<input type="checkbox" name="autoLogin" checked="checked" value="" id="remember">记住我</label>
<a href="http://www.lagou2.com/accountPwd/toReset.html" class="fr">忘记密码？</a>
<input type="button" value="登 &nbsp; &nbsp; 录" id="submitLogin"></form>

<script type="text/javascript">

var emailres = false;
var pwdres = false;
    $('#email').blur(function(){
        var reg = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        var telreg = /^1[0-9]{10}$/;
        var v = $('#email').val();
        var ere = reg.test(v);
        var tre = telreg.test(v);
        if(ere || tre){
            $('#userinfo').html('');
            emailres = true;
        }else{
            $('#userinfo').html('请按规则输入用户名');
            emailres = false;
        }
    });
     $('#password').blur(function(){
        var v = $('#password').val().trim();
        if(v){
            $('#pwdinfo').html('');pwdres = true;
        }else{
            $('#pwdinfo').html('请输入密码');pwdres = false;
        }
    });
    $('#submitLogin').click(function(){
        var email = $('#email').val();
        var password = $('#password').val().trim();
        $('#email').blur();
        $('#password').blur();
        if(emailres && pwdres){
            $.post('<?php echo U("Home/Login/doLogin");?>',{username:email,password:password},function(res){
                if(res['code'] == 1){
                    $('#login_beError').css('color','green').html('登陆成功');
                    setTimeout(function(){ window.location.reload();
                    $('#loginToolBar').hide();
                    $('#colorbox').fadeOut();$('#bbgg').fadeOut();},1000);
                }else{
                     $('#login_beError').css('color','red').html('户名或密码错误');
                }
            });
        }

    });
</script>

<div class="login_right">
<div>还没有拉勾帐号？</div>
<a class="registor_now" href="<?php echo U('Home/Register/register');?>" target='_blank'>立即注册</a>
<div class="login_others">使用以下帐号直接登录:</div>
<a title="使用新浪微博帐号登录" class="icon_wb" id="icon_wb" target="_blank" href="http://www.lagou2.com/oauth20/auth_sinaWeiboProvider.html?service=http%3A%2F%2Fwww.lagou2.com%2F"></a>
<a title="使用腾讯QQ帐号登录" target="_blank" id="icon_qq" class="icon_qq" href="http://www.lagou2.com/oauth20/auth_qqProvider.html?service=http%3A%2F%2Fwww.lagou2.com%2F"></a>
<a title="使用腾讯QQ帐号登录" target="_blank" id="icon_weixin" class="icon_weixin" href="http://www.lagou2.com/oauth20/auth_weixinProvider.html?service=http%3A%2F%2Fwww.lagou2.com%2F"></a>
</div>
</div>
</div>
<div id="cboxTitle" style="float: left; display: block;">登录</div>
<div id="cboxCurrent" style="float: left; display: none;"></div>
<button type="button" id="cboxPrevious" style="display: none;"></button>
<button type="button" id="cboxNext" style="display: none;"></button>
<button id="cboxSlideshow" style="display: none;"></button>
<div id="cboxLoadingOverlay" style="float: left; display: none;"></div>
<div id="cboxLoadingGraphic" style="float: left; display: none;"></div>
<button type="button" id="cboxClose" class="myclose" onclick="$('#colorbox').fadeOut();$('#bbgg').fadeOut();">close</button>
</div>
<div id="cboxMiddleRight" style="float: left; height: 344px;"></div>
</div>
<div style="clear: left;">
<div id="cboxBottomLeft" style="float: left;"></div>
<div id="cboxBottomCenter" style="float: left; width: 630px;"></div>
<div id="cboxBottomRight" style="float: left;"></div>
</div>
</div>
<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>

<!-- <div id="appDownload">
<img src="../images/appqr0724.jpg" width="120" height="120" alt="download app" />
<a href="http://www.lagou.com/app/download.html" target="_blank">
<span>下载拉勾APP</span>
</a>
</div>
-->
<!--分站城市-->
<script>
    window.global = window.global || {};
    global.isLogin=false;
    global.isFirst = false;
    global.subSite = "北京";
    global.subSites = "全国,上海,杭州,广州,深圳,成都".split(',');
</script>
<script type="text/javascript" src="/Public/css/Chart.min.js"></script>
<script type="text/javascript" src="/Public/css/home.min.js"></script>
<script type="text/javascript" src="/Public/css/count.js"></script>
<script type="text/javascript" src="/Public/css/list_count.js"></script>
<script>
    var a = $('#home_banner .banner_bg li a');
    var http = 'http://'
    for(var i=0;i<a.length;i++){
        var str = $(a[i]).attr('href');
        if( str.indexOf( http ) < 0 ){
            $(a[i]).attr('target','_self');
        }
    }

</script>
<script type="text/javascript">
    $(function(){

        // $('#aaa').click(function(){
        //  PASSPORT.popup();
        // })


        $(".mr_del").on("click",function(){
            $(".mr_remind").hide() ;
            $.ajax({
                type:'POST',
                data: {},
                url:ctx+'/resume/clearShowNoticeInSeesion.json'
            }).done(function(result) {
            });
        })
    })
</script>
<script type="text/javascript">
    var pypv;
    var IsLogin = "";
    IsLogin == '' ? pypv = 2 : pypv = 1;
    var _py = _py || [];
    _py.push(['a', 'ga..n3f5DPSWZXFMcbQa2-GxjX']);
    _py.push(['domain', 'stats.ipinyou.com']);
    _py.push(['pv', pypv]);
    _py.push(['e', '']);
    -function(d) {
        var s = d.createElement('script'),
                e = d.body.getElementsByTagName('script')[0];
        e.parentNode.insertBefore(s, e),
                f = 'https:' == location.protocol;
        // s.src = (f ? 'https' : 'http') + '://' + ('www.lagou2.com') + '/js/adv-sim.js';
    }(document);
</script>
<!--浏览记录-->
<script type="text/javascript" src="/Public/css/history2.js"></script>
<!-- 统计代码配置 -->
<script type="text/javascript">
    $(function(){
        var tag = $('.init_joblist');
        var tag_attr = 'data-jobid';
        var t = $.trim($('.hotabbing').children('li:first').text());
        if( t == '热门职位' ){
            t = 'hot';
        }else if( t == '推荐职位'){
            t = 'recommend';
        }
        initHotJob(t,tag,tag_attr);
    });
</script>
<noscript>
&lt;img src="//stats.ipinyou.com/adv.gif?a=ga..n3f5DPSWZXFMcbQa2-GxjX&amp;e=" style="display:none;" /&gt;
</noscript>
<script type="text/javascript">
    var jobids = [];
    var dszicon_joblists = $(".position_list_item");
    for ( var i = 0; i < dszicon_joblists.length; i ++ ) {
        jobids.push(jQuery(dszicon_joblists[i]).data("jobid"));
    }
    var jobicons_type = 1;
</script>
<script type="text/javascript">
    //页面滑动到底部时，底部的登录banner向上移，露出“拉勾微博 拉勾微信 帮助中心 联系我们：400-605-9900”
    if(document.getElementById('loginToolBar')){
        var scroll = function(){
                    var scrollTop = $(this).scrollTop();
                    var scrollHeight = $(document).height();
                    var windowHeight = $(this).height();
                    if(scrollTop + windowHeight >= scrollHeight-68){
                        var bottom_range = 68 - (scrollHeight - scrollTop - windowHeight);
                        $("#loginToolBar").css('bottom', bottom_range);
                        var backtop_range = 140 + bottom_range;
                        $('#backtop').css('bottom', backtop_range);
                        var product_fk_range = 80 + bottom_range;
                        $('#product-fk').css('bottom', product_fk_range);
                        var feedback_con_range = 80 + bottom_range;
                        $('#feedback-con').css('bottom', feedback_con_range);

                    }else{
                        $("#loginToolBar").css('bottom', 0);
                        $('#backtop').css('bottom', 140);
                        $('#product-fk').css('bottom', 80);
                        $('#feedback-con').css('bottom', 80);

                    }
                };
        $(window).scroll(scroll);
        $(window).resize(scroll);
    }
</script>
<script type="text/javascript">
    var arr=jobids;
    jobids = jobids.join(",");
    var $icon1 = $("<i class='fl pos_icon_small'></i>");
    var $icon2 = $("<i class='fl pos_icon_big'></i>");
    function callback(data) {
        for(var i=0,l=arr.length;i<l;i++){
            var jobid=arr[i];
            if(!data[jobid]) break;
            switch(jobicons_type){
                case 1:
                    var item = $(".position_list li[data-jobid=" +  jobid + "]").find(".pli_top .position_name");
                    item.append($icon1.clone());
                    break;
                case 2:
                    var item = $(".recommend_list .rec_pos li[data-jobid=" +  jobid + "]").find(".rec_pos_l .row:eq(0)");
                    item.append($icon1.addClass("rec_pos_icon").clone());
                    break;
                case 3:
                    var item = $(".my_collections li[data-id=" +  jobid + "]").find(".co_item h2 a");
                    item.append($icon1.clone().addClass("rec_pos_icon"));
                    break;
                case 4: 
                    $("#container .content_l").append($icon2.clone());
                    break;
            }   
        }
    }
    jQuery.ajax({
        url:"http://c.lagou.com/icon/showIcon.json",
        dataType: 'jsonp',
        jsonp: 'callback',
        data:{
            type:"POSITION",
            size:'big',
            ids : jobids
        }
    }).done(function (data) {
        callback && callback(data);
    });
</script>
<!-- footer样式 -->
<link href="/Public/css/main.css" rel="stylesheet">
<script charset="utf-8" src="/Public/css/wpa.php"></script>

<div class="clear"></div>
<div class="main_con_backup">
<input type="hidden" id="resubmitToken" value="">
<a id="backtop" title="回到顶部" rel="nofollow" style="bottom: 140px; display: none;"></a>
<!--product feedback-->
<!--我要反馈按钮-->
<div id="product-fk" style="bottom: 80px;">
<div id="feedback-icon">
<div class="fb-icon"></div>
<span>我要反馈</span>
<em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~
<i></i></em> 
<em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

<div id="feedback-con" style="bottom: 80px;">
<div class="pfb-pho-close">
<div class="pfb-pho"></div>
<div class="pfb-close"></div>
</div>
<em class="error dn"><span>你还没填任何反馈呢</span>
<i></i></em> 
<form id="product-fb">
<div class="pfb-txt">
<textarea placeholder="我是拉勾的产品经理哈丁，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" maxlength="200"></textarea>
</div>
<div class="pfb-email" style="height:60px;">
<input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）">
<span class="ensure">确定</span>
</div>
</form>
<input type="hidden" id="login-email" value=""></div>

<script>
    // 关闭
    //3s tips消失
    window.global = window.global || {};
    global.email = "";
    global.usertoken = jQuery.cookie('user_trace_token');
    global.idmd5 = "";

</script>
<script src="/Public/css/feedback.js"></script>
</div>

</div>
<!-- end #container -->

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
<script type="text/javascript" src="/Public/css/core.js"></script>
<!-- <script type="text/javascript" src="/Public/css/analytics(1).js"></script>
-->
<script src="/Public/css/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/css/plat_tj.js"></script>
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>

<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
<div id="cboxWrapper">
<div>
<div id="cboxTopLeft" style="float: left;"></div>
<div id="cboxTopCenter" style="float: left;"></div>
<div id="cboxTopRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxMiddleLeft" style="float: left;"></div>
<div id="cboxContent" style="float: left;">
<div id="cboxTitle" style="float: left;"></div>
<div id="cboxCurrent" style="float: left;"></div>
<button type="button" id="cboxPrevious"></button>
<button type="button" id="cboxNext"></button>
<button id="cboxSlideshow"></button>
<div id="cboxLoadingOverlay" style="float: left;"></div>
<div id="cboxLoadingGraphic" style="float: left;"></div>
</div>
<div id="cboxMiddleRight" style="float: left;"></div>
</div>
<div style="clear: left;">
<div id="cboxBottomLeft" style="float: left;"></div>
<div id="cboxBottomCenter" style="float: left;"></div>
<div id="cboxBottomRight" style="float: left;"></div>
</div>
</div>
<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul>
<iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe>
</body>
</html>