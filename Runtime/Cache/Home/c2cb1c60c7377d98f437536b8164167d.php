<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0037)http://www.lagou.com/gongsi/9565.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" charset="utf-8" async="" src="/Public/Home/companyshow/contains.js"></script><script type="text/javascript" charset="utf-8" async="" src="/Public/Home/companyshow/taskMgr.js"></script><script type="text/javascript" charset="utf-8" async="" src="/Public/Home/companyshow/views.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1999 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta property="qc:admins" content="23635710066417756375">
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">

	<meta charset="UTF-8">

		<meta content="LeanCloud招聘,LeanCloud最新招聘信息,LeanCloud职位招聘,LeanCloud求职" name="keywords">
	
		<meta content="LeanCloud（https://leancloud.cn/）是国内领先的移动应用后端服务商.我们已经向包括知乎、飞利浦、链家地产、暴走漫画、拉卡拉、荣昌e袋洗、功夫熊、丁香园、逗拍等数万开发者和App提供稳定的后端服务..." name="description">
	
		<title>LeanCloud招聘-美味书签（北京）信息技术有限公司招聘-拉勾网</title>
	
	<!-- common -->
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script charset="utf-8" src="/Public/Home/companyshow/v.js"></script><script async="" src="/Public/Home/companyshow/analytics.js"></script><script async="" src="/Public/Home/companyshow/a.js"></script><script type="text/javascript">
var ctx = "http://www.lagou.com";
var rctx = "http://hr.lagou.com";
var pctx = "http://passport.lagou.com";
var crctx = "http://www.lagou.com";
var sctx = "http://suggest.lagou.com";
var chrctx = "http://c.hr.lagou.com";

var frontLogin = "http://www.lagou.com/frontLogin.do";
var frontLogout = "http://www.lagou.com/frontLogout.do";
var frontRegister = "http://www.lagou.com/frontRegister.do";

</script>

	<!-- header/global_domain -->
	
<script type="text/javascript">
var GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
	ctx : "http://www.lagou.com",
	rctx : "http://hr.lagou.com",
	pctx : "http://passport.lagou.com",
	actx : "http://account.lagou.com",
	paictx : "http://pai.lagou.com",
	sctx : "http://suggest.lagou.com"
};
</script>

	<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">

	<!-- 主头部样式 -->
	<link href="/Public/Home/companyshow/header.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/css2/page.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/companyshow/style.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/companyshow/style(1).css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/companyshow/external.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/companyshow/list.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/companyshow/popup.css">

	<script type="text/javascript" src="/Public/Home/companyshow/jquery-1.11.3.min.js"></script>

	<script type="text/javascript" src="/Public/Home/companyshow/jquery.lib.min.js"></script>

	<script type="text/javascript" src="/Public/Home/companyshow/ajaxfileupload.js"></script>

	<script type="text/javascript" src="/Public/Home/companyshow/timeCountDown.js"></script>

        <script type="text/javascript" src="/Public/Home/companyshow/additional-methods.js"></script>
		<script type="text/javascript" src="/Public/Home/companyshow/list.js"></script>
	
	<!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015110914"></script>
	<![endif]-->

	
<script defer="" id="_lgpassport_" data-css-site="1" data-css-popup="1" src="/Public/Home/companyshow/passport.js" onload="passportInit()"></script>

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
            clearPushNoticeOfC : "http://www.lagou.com/common/clearPushNoticeOfC.json"
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

<body><iframe style="display: none;"></iframe><style type="text/css">.WPA3-SELECT-PANEL { z-index:2147483647; width:463px; height:292px; margin:0; padding:0; border:1px solid #d4d4d4; background-color:#fff; border-radius:5px; box-shadow:0 0 15px #d4d4d4;}.WPA3-SELECT-PANEL * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none; font-family:Microsoft YaHei,Simsun;}.WPA3-SELECT-PANEL a { cursor:auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-TOP { height:25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE { float:right; display:block; width:47px; height:25px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE:hover { background-position:0 -25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-MAIN { padding:23px 20px 45px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-GUIDE { margin-bottom:42px; font-family:"Microsoft Yahei"; font-size:16px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-SELECTS { width:246px; height:111px; margin:0 auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT { float:right; display:block; width:88px; height:111px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat 0 -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT:hover { background-position:-88px -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-AIO-CHAT { float:left;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ { display:block; width:76px; height:76px; margin:6px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat -50px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ-ANONY { background-position:-130px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-LABEL { display:block; padding-top:10px; color:#00a2e6; text-align:center;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-BOTTOM { padding:0 20px; text-align:right;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-INSTALL { color:#8e8e8e;}</style><style type="text/css">.WPA3-CONFIRM { z-index:2147483647; width:285px; height:141px; margin:0; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAACNCAMAAAC9pV6+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU5QUIyQzVCNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU5QUIyQzVDNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTlBQjJDNTk1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTlBQjJDNUE1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6QoyAtAAADAFBMVEW5xdCkvtNjJhzf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) no-repeat;}.WPA3-CONFIRM { *background-image:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/panel.png);}.WPA3-CONFIRM * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none;}.WPA3-CONFIRM * { font-family:Microsoft YaHei,Simsun;}.WPA3-CONFIRM .WPA3-CONFIRM-TITLE { height:40px; margin:0; padding:0; line-height:40px; color:#2b6089; font-weight:normal; font-size:14px; text-indent:80px;}.WPA3-CONFIRM .WPA3-CONFIRM-CONTENT { height:55px; margin:0; line-height:55px; color:#353535; font-size:14px; text-indent:29px;}.WPA3-CONFIRM .WPA3-CONFIRM-PANEL { height:30px; margin:0; padding-right:16px; text-align:right;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON { position:relative; display:inline-block!important; display:inline; zoom:1; width:99px; height:30px; margin-left:10px; line-height:30px; color:#000; text-decoration:none; font-size:12px; text-align:center;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON-FOCUS { width:78px;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON .WPA3-CONFIRM-BUTTON-TEXT { line-height:30px; text-align:center; cursor:pointer;}.WPA3-CONFIRM-CLOSE { position:absolute; top:7px; right:7px; width:10px; height:10px; cursor:pointer;}</style>

	<div id="body">

		<!--C端头部通栏广告位-->
		<!-- <div id="top_bannerC">
    <a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div> -->
		<!-- 验证注册邮箱 -->
		
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


		<!-- 数据展示类接口需要版本号 -->
	    <input type="hidden" id="version" value="1.5.6_2015110914">

	    <div id="container">
    
    <!-- cibase在公司列表有用到，crbase在公司主页用到，并应用到header/common.html -->













<!-- 编辑器样式 -->
<link href="/Public/Home/companyshow/umeditor.css" rel="stylesheet">
<!-- 主页面样式 -->
<link href="/Public/Home/companyshow/main.css" rel="stylesheet">

<link href="/Public/Home/companyshow/jquery.mCustomScrollbar.css" rel="stylesheet">
<!-- 图像裁剪样式 start-->
<link href="/Public/Home/companyshow/tailoring.css" rel="stylesheet">
<!-- 图像裁剪样式 end-->



<div id="content-container">

    

    
    <!-- 公司基本信息 -->
    <div class="top_info">
    <!-- 展示 -->
    <div class="top_info_wrap">
        <img src="<?php echo ($com_more["logo"]); ?>">
        <div class="company_info">
            <div class="company_main">
                <h1 class="ellipsis">
                    <a href="<?php echo ($com_more["web"]); ?>" class="hovertips" target="_blank" rel="nofollow" title="<?php echo ($com_more["name"]); ?>">
                    <?php echo ($com_more["name"]); ?>
                    </a>
                </h1>
                <a href="<?php echo ($com_more["web"]); ?>" target="_blank" rel="nofollow" class="icon-wrap"  title="<?php echo ($com_more["web"]); ?>"><i></i></a>
                    <?php if($com_more["state"] == 1): ?><!-- 已认证 -->
                        <a href="javascript:;" class="identification" title="拉勾认证企业" >
                            <i></i>
                            <span>拉勾认证</span>
                        </a>
                    <?php else: ?>
                        <a href="javascript:;" class="identification" title="拉勾认证企业" style='background:#333333;border-color:#333333'>
                            <span>未认证</span>
                        </a><?php endif; ?> 
                                    
                
                <div class="company_word clear">
                    <?php echo ($com_more["one_desc"]); ?>
                </div>
            </div>
            <div class="company_data">
                <ul>
                    <li>
                    <strong><?php echo count($zpjob);?></strong><br>
                            <span class="tipsys" original-title="该公司的在招职位数量">
                    <span>招聘职位</span><span class="tip"></span>
                            </span>
                                            </li>
                    <li>
                                                <strong>90%</strong><br>
                        <span class="tipsys" original-title="该公司所有职位收到的简历中，在投递后7天内处理完成的简历所占比例">
                            <span>简历及时处理率 </span><span class="tip"></span>
                        </span>
                                            </li>
                    <li>
                                                <strong>4天</strong><br>
                        <span class="tipsys" original-title="该公司的所有职位管理者完成简历处理的平均用时">
                            <span>简历处理用时</span><span class="tip"></span>
                        </span>
                                                
                    </li>
                </ul>
            </div>
        </div><!-- end .company_info -->
    </div><!-- end .top_info_wrap -->
    
    <!-- 编辑 -->
    <div class="top_info_wrap_edit dn">
        <form id="topInfoForm" action="javascript:;" method="post">
            <div class="company_logo_edit">
                <img src="/Public/Home/companyshow/CgYXBlTUWDuAddwQAABNRjs4wsE479.jpg">   
                <div>
                    <i></i>
                    <span>
                        上传LOGO请小于5M
                        <br>
                        尺寸：170px*170px
                    </span>
                </div>
                <input type="file" id="logoUpload" name="filePic" title="支持jpg、jpeg、gif、png格式，文件小于10M">
            </div>
        
            <div class="company_info_edit">
                <a href="javascript:;" class="cancel_edit">
                    <i></i>
                    取消编辑
                </a>
                
                                <h1>
                    <a href="https://leancloud.cn/" target="_blank">
                        LeanCloud
                        <i></i>
                    </a>
                </h1>
                                
                <label>
                    <span class="redstar">*</span>
                    <input type="text" class="companyUrl" name="companyUrl" value="https://leancloud.cn/">
                </label>
                
                <input type="hidden" class="companyName" name="companyName" value="美味书签（北京）信息技术有限公司">
                <div class="longname">美味书签（北京）信息技术有限公司</div>
                
                <label>
                    <span class="redstar">*</span>
                    <input type="text" class="long companyIntroduce edit_area" name="companyIntroduce" value="中国领先的一站式移动开发后端服务">
                    <span class="red numtip">（9/50）</span>
                </label>
                
                <input type="submit" value="保存" class="save">
                <a href="javascript:;" class="cancel">取消</a>
            
            </div><!-- end .company_info -->
        </form>
    </div><!-- end .top_info_wrap_edit -->
    
</div><!-- end .top_info -->
    
    <!-- Tabbing -->
    <div id="company_navs" class="company_navs">
    <div class="company_navs_wrap">
        <ul data-pjax="">
            <li><a href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($com_more["id"]); ?>">公司主页</a></li>
            <li  class="current"><a href="">招聘职位（<?php echo ($count); ?>）</a></li>
        </ul>
        
        <div class="company_share">
            <span>分享</span>
            <a href="javascript:void(0);" class="share_weibo" rel="nofollow" title="分享到微博"></a>
            <a href="javascript:void(0);" class="share_weixin" rel="nofollow" title="分享到微信"></a>
            <div class="share_weixin_success">
                <img alt="移动端公司主页二维码">
            </div>
        </div>
    </div>
</div>
<div class="company_navs_shadow" style="display: none;"></div>    
    <div id="main_container">
        <div class="container_left">
            <!-- 职位列表 -->
            <div id="containerCompanyPositionLists">

                <!-- 职位筛选和列表 -->
<div class="posfilterlist_container item_container">
    
    <h3 class="item_ltitle">
        近两月共有 <span class="list_total"><?php echo ($count); ?></span> 个在招职位
    </h3>

    <!-- 内容区域 -->
    <div class="item_content">


        <!-- 列表 -->
    <ul class="item_con_list" style="display: block;">
    <?php if(is_array($zpjob)): $i = 0; $__LIST__ = $zpjob;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="con_list_item" data-positionid="374243" data-salary="15k-25k" data-company="校联帮" data-positionname="web前端">
        <p class="item_title_date">
            <a href="<?php echo U('Home/JobShow/index');?>?jid=<?php echo ($vo["id"]); ?>" data-index="0" target="_blank" class="item_title position_link" rel="nofollow" data-lg-tj-id="9400" data-lg-tj-no="0100" data-lg-tj-cid="39451">
                <?php echo ($vo["name"]); ?> [  <?php echo ($vo["city"]); ?> ]
            </a>
            <span class="item_date">
                 <?php echo (date('Y-m-d',$vo["create_time"])); ?> 发布
            </span>
        </p>
        <p class="item_detail">
            <span class="item_salary">
                 <?php echo ($vo["salary_low"]); ?>k-<?php echo ($vo["salary_high"]); ?>k
            </span>
            <span class="item_desc">
                 经验<?php echo ($vo["work_year"]); ?> / <?php echo ($vo["edu"]); ?> / <?php echo ($vo["nature"]); ?>
            </span>
        </p>
        <i class="left_border"></i>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

        <!-- 分页器 -->
        <!-- <div class="item_con_pager"><div class="pager_container"><span hidefocus="hidefocus" action="prev" class="pager_prev pager_prev_disabled"><strong class="pager_lgthen pager_lgthen_dis"></strong>上一页</span><span hidefocus="hidefocus" page="1" class="pager_is_current">1</span><span hidefocus="hidefocus" page="2" class="pager_not_current">2</span><span hidefocus="hidefocus" action="next" class="pager_next ">下一页<strong class="pager_lgthen "></strong></span></div></div> -->
    <div class="Pagination"><?php echo ($pages); ?></div>
    </div>

</div>

<!-- template -->
<script id="tpl-position-list" type="text/html">

   {{each data as item i}}
    <li class="con_list_item" data-positionid="{{item.positionId}}" data-salary="{{item.salary}}" data-company="校联帮" data-positionname="{{item.positionName}}">
        <p class="item_title_date">
            <a href="http://www.lagou.com/jobs/{{item.positionId}}.html" data-index="{{i}}" target="_blank" class="item_title position_link" rel="nofollow" data-lg-tj-id="9400" data-lg-tj-no="
                {{if i<10}}
                    {{if item.curpage<10}}
                    0{{item.curpage}}0{{i}}
                    {{else}}
                    {{item.curpage}}0{{i}}
                    {{/if}}
                {{else}}
                    {{if item.curpage<10}}
                    0{{item.curpage}}{{i}}
                    {{else}}
                    {{item.curpage}}{{i}}
                    {{/if}}
               {{/if}}
                " data-lg-tj-cid="{{item.companyId}}">
                {{item.positionName}} {{if item.city}}[  {{item.city}} ]{{/if}}
            </a>
            <span class="item_date">
                 {{item.createTime}} 发布
            </span>
        </p>
        <p class="item_detail">
            <span class="item_salary">
                 {{item.salary}}
            </span>
            <span class="item_desc">
                 经验{{item.workYear}} / {{item.education}} / {{item.jobNature}}
            </span>
        </p>
        <i class="left_border"></i>
    </li>
    {{/each}}
    
</script>
<!-- <script type="text/javascript" src="http://www.lagou.com/js/site-hr/company-index/history2.js?v=1.5.6_2015111017"></script> -->
            </div>
        </div> 
        <div class="container_right">

             <!-- 公司信息 -->
            <div class="item_container" id="company_basic_info">
    <h3 class="item_ltitle">公司基本信息</h3>

         
    <span class="item_ropera icanceledit dn">
        <em class="item_ropeiconp item_ropeicons"></em>
        <span class="item_ropetext">取消编辑</span>
    </span>
    
    <!-- 展示模式 -->
    <div class="item_content">
        <ul class="info_list_with_icon">
            <li class="industry">
                <i></i>
                <span><?php echo ($com_more["trade"]); ?></span>
            </li>
            <li class="financing">
                <i></i>
                <span><?php echo C('company_stage')[$com_more['stage']];?></span>
            </li>
            <li class="scale">
                <i></i>
                <span><?php echo C('company_scale')[$com_more['scale']];?></span>
            </li>
                        <li class="location">
                <i></i>
                <span><?php echo ($com_more["city"]); ?></span>
            </li>
         </ul>
    </div>

    <!-- 编辑模式 -->
    <div class="item_content_edit_wrap dn">
        <ul class="info_list_with_icon">
            <li class="industry">
                <i></i>
                <span>移动互联网,企业服务</span>
            </li>
        </ul>
        <div class="item_content_edit">
            <form id="basicInfoForm" action="javascript:;" method="post">
                <label>
                    <span class="redstar">*</span>
                    <div class="simulate_select">
                        <input type="hidden" class="companyfinancing" name="companyfinancing" value="A轮">
                        <span>A轮</span>
                        <i></i>
                        <ul style="display: none;">
                                                    </ul>
                    </div>
                </label>
                
                <label>
                    <span class="redstar">*</span>
                    <div class="simulate_select">
                        <input type="hidden" class="companyscale" name="companyscale" value="15-50人">
                        <span><?php echo C('company_scale')[$com_more['scale']];?></span>
                        <i></i>
                        <ul style="display: none;">
                                                    </ul>
                    </div>
                </label>

                <input type="submit" value="保存" class="save">
                <a href="javascript:;" class="cancel">取消</a>
            </form>
        </div><!-- end .item_content_edit -->
                <ul class="info_list_with_icon">
            <li class="location">
                <i></i>
                <span>北京</span>
            </li>
        </ul>
            </div>
</div>
            <!-- 管理团队 -->
                            <div class="company_managers item_container">
    <h3 class="item_ltitle">管理团队</h3>

    <div class="company_mangers_item">
    
        <!-- 列表 -->
        <div class="managelist_wrap">
        <ul class="manager_list">
        <?php if(is_array($team)): $i = 0; $__LIST__ = array_slice($team,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item_has rotate_item  rotate_active ">
                <img class="item_manger_photo_show" src="<?php echo ($vo["image"]); ?>" alt="创始人头像">
                <p class="item_manager_name"><span><?php echo ($vo["name"]); ?></span>
                    <a href="<?php echo ($vo["werbo"]); ?>" target="_blank" rel="nofollow" title="新浪微博"></a>
                </p>
                <p class="item_manager_title"><?php echo ($vo["position"]); ?></p>
                    <div class="item_manager_content mCustomScrollbar _mCS_3 mCS_no_scrollbar"><div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <p><?php echo ($vo["desc"]); ?></p>
                    </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>   
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
            </div> 
</div>
            
            <!-- 公司标签 -->
                            <!-- 公司标签 -->
<div class="tags_container item_container">
    
    <h3 class="item_ltitle">公司标签</h3>
    
    <div class="tags_warp">
        
        <div class="item_content">
            <ul class="item_con_ul">
            <?php if(is_array($com_more["tags"])): $i = 0; $__LIST__ = $com_more["tags"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="con_ul_li">
                    <?php echo ($vo); ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    
    </div>
</div>
            
            <!-- 快速导航 -->
            <!-- 滑动导航 -->

</div>
        </div><!-- end .container_right -->
        
        <input type="hidden" id="companyId" name="companyId" value="9565">
    
    </div><!-- end #main_container -->
   
</div><!-- end #content-container -->

<!-- 完成度评分 -->

<!-- dep -->
    <!-- jQuery 请包含在build忽略模块中，因为实际页面中的header中已经引入 -->
    
    <script src="/Public/Home/companyshow/jquery.placeholder.js"></script>
    <script src="/Public/Home/companyshow/template.min.js"></script>
    <script src="/Public/Home/companyshow/esl.js"></script>
    <script src="/Public/Home/companyshow/cookies.js"></script>
    <script type="text/javascript">
    require.config({
        'baseUrl': 'http://www.lagou.com',
        'urlArgs': 'v=1.5.6_2015110914',
        'paths': {
            'common': 'js/common',
            'example-project': 'js/example-project',
            'site-customer': 'js/site-customer',
            'site-hr': 'js/site-hr'
        },
        'packages': [
            {
                'name': 'emitter',
                'location': 'http://www.lagou.com/js/common/dep/saber-emitter-1.0.0/asset',
                'main': 'emitter'
            },
            {
                'name': 'storage',
                'location': 'http://www.lagou.com/js/common/dep/saber-storage-1.0.0/asset',
                'main': 'storage'
            },
            {
                'name': 'cookies',
                'location': 'http://www.lagou.com/js/common/dep/cookies-1.1.0/asset',
                'main': 'cookies'
            }
        ]
    });
    $( document ).ready( function( ) {
       $( 'input, textarea' ).placeholder();
    } );
    </script>
    

<!-- 引入编辑器逻辑 start-->

<script type="text/javascript">
    window.UMEDITOR_HOME_URL = 'http://www.lagou.com/js/common/dep/umeditor-1.2.2/dist/utf8-jsp/';
</script>
<script src="/Public/Home/companyshow/umeditor.config.js"></script>
<script src="/Public/Home/companyshow/umeditor.min.js"></script>
<script src="/Public/Home/companyshow/zh-cn.js"></script>

<!-- tooltip -->
<script src="/Public/Home/companyshow/jquery.tipsy.js"></script>
<!-- 引入编辑器逻辑 end-->



<!-- 图像裁剪相关依赖 start -->
<script src="/Public/Home/companyshow/jquery.migrate.js"></script>
<script src="/Public/Home/companyshow/jquery.ui.custom.js"></script>
<script src="/Public/Home/companyshow/jquery.cropzoom.js"></script>
<!-- 图像裁剪相关依赖 end -->

<!-- 编辑框字数统计插件 -->
<script src="/Public/Home/companyshow/jquery.editor.js"></script>
<!-- 编辑框字数统计插件 -->

<!-- 删除弹窗 -->
<script src="/Public/Home/companyshow/jquery.delete.js"></script>
<!-- 删除弹窗 -->



<!-- 自定义滚动条 start-->
<script src="/Public/Home/companyshow/jquery.mousewheel.min.js"></script>
<script src="/Public/Home/companyshow/jquery.mCustomScrollbar.js"></script>
<!-- 自定义滚动条 end-->

<!-- 日历 start-->
<script src="/Public/Home/companyshow/jquery.ui.datepicker.js"></script>
<!-- 日历 end-->

<!-- 分页样式 start -->
<!-- <link href="http://www.lagou.com/css/site-hr/company-index/list.css?v=1.5.6_2015110914" rel="stylesheet" /> -->
<!-- 分页样式 end -->



<script src="/Public/Home/companyshow/jquery.checkbox.js"></script>
<script type="text/javascript" src="/Public/Home/companyshow/api"></script><script type="text/javascript" src="/Public/Home/companyshow/getscript"></script>

<!-- artTemplate -->




<script>
    window.global = window.global || { };

    window.console = window.console || (function(){   
        var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile   
        = c.clear = c.exception = c.trace = c.assert = function(){};   
        return c;   
    })();
    
    //global.ctx : 当前需要build到的项目的主域名（比如company homepage在hr.lagou.com下, global.ctx='http://hr.lagou.com'）
    global.ctx = 'http://www.lagou.com';
    // 1:公司页，2:职位页
    global.pageType = '1';
    // boolean ( true:c.hr.lagou.com具有编辑权限的大账户，false:www.lagou.com )
    global.userType = false;

    /**
     * 页面事件中转，不同模块可以通过此中转，来触发全局事件或者监听全局事件
     * 在main中初始化
     * @type {Object}
     */
    global.eventController = null;
    // 
    global.isB = "false" == "true";
    global.companyId = "9565";
    global.companyInfo = {"pageType":1,"history":[{"id":59807,"companyid":9565,"eventtype":"其他","type":"5","eventname":"移动应用开发平台AVOS Cloud将独立发展 已拥有近万用户","eventurl":"http://cn.technode.com/post/2014-05-15/avoscloud-independent/","eventprofile":"","investMoney":"","icon":"","financeStage":""},{"id":67219,"companyid":9565,"eventtype":"其他","type":"5","eventname":"LeanCloud江宏：坦诚与认真——创业者不可忽略的素质","eventurl":"http://www.geekpark.net/topics/212192","eventprofile":"","investMoney":"","icon":"","financeStage":""},{"id":67220,"companyid":9565,"eventtype":"其他","type":"5","eventname":"LeanCloud：第二代云服务的先行者","eventurl":"http://www.cloud-time.com/cloudstartup/leancloud%EF%BC%9A%E7%AC%AC%E4%BA%8C%E4%BB%A3%E4%BA%91%E6%9C%8D%E5%8A%A1%E7%9A%84%E5%85%88%E8%A1%8C%E8%80%85/","eventprofile":"","investMoney":"","icon":"","financeStage":""},{"id":67221,"companyid":9565,"eventtype":"其他","type":"5","eventname":"LeanCloud 江宏：为了更好的创业 | 微软创投加速器","eventurl":"http://www.wredian.com/2014/09/155672.html","eventprofile":"","investMoney":"","icon":"","financeStage":""},{"id":67222,"companyid":9565,"eventtype":"其他","type":"5","eventname":"LeanCloud联合创始人兼CEO江宏：做一家有态度的公司","eventurl":"http://article.liepin.com/webEssay/showdetail/6275273990k1786355632","eventprofile":"","investMoney":"","icon":"","financeStage":""}],"coreInfo":{"companyId":9565,"logo":"image1/M00/00/13/CgYXBlTUWDuAddwQAABNRjs4wsE479.jpg","companyName":"美味书签（北京）信息技术有限公司","companyShortName":"LeanCloud","approve":2,"companyUrl":"https://leancloud.cn/","companyIntroduce":"中国领先的一站式移动开发后端服务","isFirst":false},"location":[{"id":3540,"companyId":9565,"briefPosition":"北京市，海淀区","detailPosition":"北京市海淀区金澳国际商业区","createTime":"20140314T145617+0800","updateTime":"20150811T182911+0800","isdel":false,"longitude":"116.385877","latitude":"39.988157"},{"id":69415,"companyId":9565,"briefPosition":"苏州市","detailPosition":"苏州昆山前进东路附近的科技广场","createTime":"20150811T182826+0800","updateTime":"20150811T182925+0800","isdel":false,"longitude":"121.060963","latitude":"31.391217"}],"labels":["股票期权","带薪年假","六险一金","定期体检","吃饭免费","弹性工作","绩效奖金","团队旅行","节日礼物"],"dataInfo":{"positionCount":13,"resumeProcessRate":90,"resumeProcessTime":4,"experienceCount":5,"lastLoginTime":"昨天"},"companyId":9565,"baseInfo":{"companyId":9565,"industryField":"移动互联网,企业服务","companySize":"15-50人","city":"北京","financeStage":"A轮"},"leaders":[{"id":4251,"companyid":9565,"photo":"image1/M00/00/BE/CgYXBlTUYE-AG2M7AAArI2hPGh0585.jpg","name":"江宏","position":"CEO","weibo":"http://weibo.com/lazyseq","remark":"u003cpu003e耶鲁大学计算机科学博士学位，曾在Google硅谷总部担任研发工程师。u003c/pu003e","createtime":"20140314T150934+0800","isenable":0,"isleader":1,"weibonickname":"","cyclopediaUrl":"http://baike.baidu.com/item/%E6%B1%9F%E5%AE%8F/16508711"}],"products":[{"id":4627,"companyid":9565,"producturl":"http://leancloud.cn","productprofile":"u003cbr /u003eLeanCloud 为应用开发提供一站式云服务，它集数据存储 、实时消息、统计分析和多种实用扩展组件于一身，全方位满足移动应用的开发需求，支持 iOS、Android、Windows 以及 Web 等多平台。nu003cbr /u003enu003cbr /u003enu003cbr /u003enu003cbr /u003e它可以帮助开发者摆脱后端开发的负担，让他们专注于产品创新，同时它有助于缩短开发周期，节省开发投入，让产品快速进入市场。","product":"LeanCloud","productpicurl":"image1/M00/15/89/CgYXBlUKi3yAfVsDAAMDBDn3ru0688.jpg"}],"isCompanyHr":false,"introduction":{"companyId":9565,"companyProfile":"u003cpu003eLeanCloud（https://leancloud.cn/） 是国内领先的移动应用后端服务商。我们已经向包括知乎、飞利浦、链家地产、暴走漫画、拉卡拉、荣昌e袋洗、功夫熊、丁香园、逗拍等数万开发者和 App 提供稳定的后端服务。u003cbr /u003eu003cbr /u003eu003cbr /u003eu003cbr /u003e我们于2014年9月获得来自 IDG 的 A 轮投资，于2015年1月从微软创投加速器孵化成功，在未来数年我们将处于一个快速发展的黄金上升阶段。u003cbr /u003eu003cbr /u003eu003cbr /u003eu003cbr /u003e作为一家以技术驱动产品的创业公司， 崇尚的是平等和坦诚、Geek 范儿十足的工程师文化，工作中有机会使用最新、最 Cool 的技术。详见：http://open.leancloud.cn/u003cbr /u003eu003cbr /u003eu003cbr /u003eu003cbr /u003e团队负责人江宏拥有耶鲁大学计算机科学博士学位，曾在 Google 总部担任资深研发工程师。我们的团队成员大都来自 Google 、Yahoo 、百度、阿里、网易、豌豆荚、知乎等知名互联网公司。u003c/pu003e","pictures":[{"id":35936,"companyId":9565,"companyPicUrl":"image1/M00/45/5E/CgYXBlXa292AHcQGAAMkJg8oKhU483.jpg","position":1,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false},{"id":35937,"companyId":9565,"companyPicUrl":"image1/M00/45/5E/CgYXBlXa3AaAOY8lAAc5BkKuqcg733.jpg","position":0,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false},{"id":35938,"companyId":9565,"companyPicUrl":"image1/M00/45/5E/CgYXBlXa3BqAUH6nABabWGD4LDQ353.jpg","position":0,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false},{"id":35939,"companyId":9565,"companyPicUrl":"image1/M00/45/5D/Cgo8PFXa3FGAZwpaABVcjZy1jTU202.jpg","position":0,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false},{"id":35940,"companyId":9565,"companyPicUrl":"image1/M00/45/5E/Cgo8PFXa3PiAQpQaAADFDXjpIYI412.jpg","position":0,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false},{"id":35941,"companyId":9565,"companyPicUrl":"image1/M00/45/5F/CgYXBlXa3PiANgePAAaT57jEheY091.jpg","position":0,"createTime":"20150824T170558+0800","updateTime":"20150824T170558+0800","isdel":false}]},"userType":false};
    global.interviewExperiences = {"pageSize":5,"start":0,"result":[{"tagArray":["面试官很nice","聊得很开心"],"id":124830,"portrait":"images/jd_portrait.png","username":"匿名","userId":92710,"isAnonymous":true,"isInterview":true,"noInterviewReason":"","noInterviewType":0,"usefulCount":0,"myScore":4,"describeScore":5,"interviewerScore":5,"companyScore":5,"comprehensiveScore":5.0,"content":"电话面试的，聊的还不错","evaluation":"","positionId":421964,"positionName":"社区运营","companyName":"LeanCloud","positionType":"运营","hrId":468808,"orderId":1258512,"companyId":9565,"replyCount":0,"isAllowReply":true,"tags":"["面试官很nice","聊得很开心"]","type":1,"status":2,"source":3,"createTime":"20151028T201455+0800"},{"reply":{"id":88628,"interviewExperienceId":122455,"portrait":"image1/M00/45/5E/CgYXBlXa2m6AIyUTAAEk-p6oED8572.JPG","username":"浩南","userId":468808,"companyName":"LeanCloud","positionName":"HR","content":"电话面试都是相对应的工程师以技术为主的面试，可能比较严肃 ：P","type":1,"createTime":"20151028T131903+0800"},"tagArray":["不太顺利"],"id":122455,"portrait":"images/jd_portrait.png","username":"赵齐","userId":2201739,"isAnonymous":false,"isInterview":true,"noInterviewReason":"","noInterviewType":0,"usefulCount":0,"myScore":3,"describeScore":4,"interviewerScore":3,"companyScore":3,"comprehensiveScore":3.3,"content":"电话面得,聊天感觉一般吧\n\u003cbr /\u003e","evaluation":"","positionId":870159,"positionName":"「Hadoop/Spark」大数据平台研发工程师","companyName":"LeanCloud","positionType":"技术","hrId":468808,"orderId":1204880,"companyId":9565,"replyCount":1,"isAllowReply":false,"tags":"[\"不太顺利\"]","type":1,"status":2,"source":1,"createTime":"20151026T220948+0800"},{"reply":{"id":88627,"interviewExperienceId":116388,"portrait":"image1/M00/45/5E/CgYXBlXa2m6AIyUTAAEk-p6oED8572.JPG","username":"浩南","userId":468808,"companyName":"LeanCloud","positionName":"HR","content":"感谢你对 LeanCloud 信任与支持 ：）","type":1,"createTime":"20151028T131750+0800"},"tagArray":["面试官很nice"],"id":116388,"portrait":"images/myresume/default_headpic.png","username":"ZHU JIANCHUN","userId":1000205,"isAnonymous":false,"isInterview":true,"noInterviewReason":"","noInterviewType":0,"usefulCount":0,"myScore":4,"describeScore":4,"interviewerScore":4,"companyScore":4,"comprehensiveScore":4.0,"content":"感觉是一家正规的公司。年轻有待提升。","evaluation":"","positionId":421964,"positionName":"开发者社区运营专家","companyName":"LeanCloud","positionType":"运营","hrId":468808,"orderId":1207470,"companyId":9565,"replyCount":1,"isAllowReply":false,"tags":"[\"面试官很nice\"]","type":1,"status":2,"source":1,"createTime":"20151021T115731+0800"},{"reply":{"id":88626,"interviewExperienceId":116071,"portrait":"image1/M00/45/5E/CgYXBlXa2m6AIyUTAAEk-p6oED8572.JPG","username":"浩南","userId":468808,"companyName":"LeanCloud","positionName":"HR","content":"希望以后我们有机会一同工作 ：）","type":1,"createTime":"20151028T131709+0800"},"tagArray":["面试官很nice","聊得很开心"],"id":116071,"portrait":"image2/M00/09/76/CgpzWlYJPkCAYAd7AAHbZEgJwzg553.jpg","username":"黄泽雨","userId":951299,"isAnonymous":false,"isInterview":true,"noInterviewReason":"","noInterviewType":0,"usefulCount":0,"myScore":4,"describeScore":5,"interviewerScore":5,"companyScore":4,"comprehensiveScore":4.7,"content":"面试中学习到了很多。","evaluation":"非常cool的公司","positionId":202497,"positionName":"DevOps系统运维工程师","companyName":"LeanCloud","positionType":"技术","hrId":468808,"orderId":1178831,"companyId":9565,"replyCount":1,"isAllowReply":false,"tags":"[\"面试官很nice\",\"聊得很开心\"]","type":1,"status":2,"source":1,"createTime":"20151020T222218+0800"},{"tagArray":["我轻轻地走了，正如我轻轻地来"],"id":4918,"portrait":"images/jd_portrait.png","username":"匿名","userId":620320,"isAnonymous":true,"isInterview":true,"noInterviewReason":"","noInterviewType":0,"usefulCount":20,"myScore":0,"describeScore":0,"interviewerScore":0,"companyScore":0,"comprehensiveScore":3.0,"content":"电话面试，对方的产品面对的行业太过专业","evaluation":"","positionId":330833,"positionName":"市场总监","companyName":"LeanCloud","positionType":"市场与销售","hrId":468808,"orderId":181753,"companyId":9565,"replyCount":0,"isAllowReply":true,"tags":"["我轻轻地走了，正如我轻轻地来"]","type":1,"status":1,"source":1,"createTime":"20141205T100102+0800"}],"totalCount":5,"pageNo":1};
    
    //rbase 是给图片加绝对路径
    global.companyInfo.rbase = 'http://www.lagou.com';
    
    require( [ 'site-hr/company-index/main' ] );
</script>    
<!-- footer样式 -->
<link href="/Public/Home/companyshow/main(1).css" rel="stylesheet">

			<div class="clear"></div>
	    	<div class="main_con_backup">
				<input type="hidden" id="resubmitToken" value="06c19c751bb142eda28e2b5c789bb2a1">
				<!--product feedback-->
				<!--我要反馈按钮-->


<div id="feedback-con">
	<div class="pfb-pho-close">
		<div class="pfb-pho"></div>
		<div class="pfb-close"></div>
	</div>
	<em class="error dn"><span>你还没填任何反馈呢</span><i></i></em>
	<form id="product-fb">
		<div class="pfb-txt">
			<textarea placeholder="我是拉勾的产品经理哈丁，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" maxlength="200"></textarea>
		</div>
		<div class="pfb-email" style="height:60px;">
			<input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）">
			<span class="ensure">确定</span>
		</div>
	</form>
	<input type="hidden" id="login-email" value="">
	<input type="hidden" id="login-phone" value="">
	<input type="hidden" id="login-realUserId" value="">
</div>

<script>
	// 关闭
	//3s tips消失
	window.global = window.global || {};
	global.email = "";
	global.usertoken = jQuery.cookie('user_trace_token');
	global.idmd5 = "";

</script>
<script src="/Public/Home/companyshow/feedback.js"></script>
   			</div>
	    </div><!-- end #container -->
	</div><!-- end #body -->
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

<script type="text/javascript" src="/Public/Home/companyshow/core.js"></script>
<script type="text/javascript" src="/Public/Home/companyshow/analytics(1).js"></script><script src="/Public/Home/companyshow/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/companyshow/plat_tj.js"></script>
<script type="text/javascript">
    jQuery.getScript("http://wpa.b.qq.com/cgi/wpa.php",function(){
        BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'onlineService'});
    });
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><iframe src="/Public/Home/companyshow/login.html" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>