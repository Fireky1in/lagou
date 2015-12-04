<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="/Public/css3/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css3/taskMgr.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css3/views.js" async="" charset="utf-8" type="text/javascript"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="expires" content="Tue, 01 Jan 1999 1:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">
	<meta property="qc:admins" content="23635710066417756375">
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">

	<meta charset="UTF-8">

		<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
	
		<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
	
		<title>开通招聘服务-拉勾网-最专业的互联网招聘平台</title>
	
	<!-- common -->
	<meta name="baidu-site-verification" content="QIQ6KC1oZ6">


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script src="/Public/css3/v.htm" charset="utf-8"></script><script src="/Public/css3/analytics.js" async=""></script><script src="/Public/css3/a.js" async=""></script><script type="text/javascript">
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
	
	<!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015110519"></script>
	<![endif]-->

	<script defer="defer" id="_lgpassport_" data-css-site="0" data-css-popup="0" src="/Public/css3/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){

                //if(!!jQuery.cookie('login') && jQuery.cookie('login') == 'true'){
            PASSPORT.util.rpc({
                url:'http://www.lagou.com/common/ping.json',
                succ:function(data){
                    console.log('succ:' + data);
                },
                fail:function(data){
                     console.log('fail:' + data);
                }
            });
            /*$('#lg_tbar .lg_tbar_menu').show();*/
            noticeInit();
                //}
    }
</script>

	<script type="text/javascript">
function noticeInit(){
    var urls = {
        //调用B端简历管理nav的数字
        queryTipsNums : "http://hr.lagou.com/recruitment/queryTipsNums.json",
        //调用Plus nav的数字
        queryUserInviteUnDealNum : "http://hr.lagou.com/plus/p/queryUserInviteUnDealNum.json",
        //调用B端简历管理Notice Tip
        queryNotice : "http://hr.lagou.com/notice/queryNotice.json",
        //清空B端用户的notice
        clearAll : "http://hr.lagou.com/notice/clearAll.json"
    }

    //调用简历管理nav的数字
    PASSPORT.util.rpc({
        params:{},
        url: urls.queryTipsNums,
        succ:function(data){
            if(data.state == "1"){
                var result = data.content.data;
                var unhandleNum = $("#unhandleNum");
                if(result.unTreateNum && result.unTreateNum > 99 ){
                    unhandleNum.text("99+");
                }else if(result.unTreateNum && result.unTreateNum > 0 ){
                    unhandleNum.text(result.unTreateNum);
                }else{
                    unhandleNum.text("");
                }
            }
        },
        fail:function(data){
            console.log('fail:' + data);
        }
    });

    //调用Plus nav的数字
    PASSPORT.util.rpc({
        params:{},
        url: urls.queryUserInviteUnDealNum,
        succ:function(data){
            if(data.state == "1"){
                var result = data.content.data;
                var plusNum = $("#plusNum");
                if(result.inviteUnDealNum && result.inviteUnDealNum > 99 ){
                    plusNum.text("99+");
                }else if(result.inviteUnDealNum && result.inviteUnDealNum > 0 ){
                    plusNum.text(result.inviteUnDealNum);
                }else{
                    plusNum.text("");
                }
            }
        },
        fail:function(data){
            console.log('fail:' + data);
        }
    });

    //调用简历管理Notice Tip
    PASSPORT.util.rpc({
        params:{},
        url:urls.queryNotice,
        succ:function(data){
            var result = data.content.data;
            if(data.state == "1" && result.pushNoticeEntity.isShowPushNotice){
                var wraperNoticeObj = $('#lg_tbar .inner');
                var counters = result.pushNoticeEntity.counters;
                var noticeDotObj = $("#noticeDot");
                var noticePopTip = ['<div id="noticeTip">',/*'<span class="bot"></span>','<span class="top"></span>',*/'<a href="javascript:;" class="closeNT"></a>'];

                if(counters.WILL_BE_REJECTED && counters.WILL_BE_REJECTED != 0 ){
                    noticePopTip.push('<a href="http://hr.lagou.com/interview/unHandlelist.html?autoRefuseDay=1&nt_flag=0&headTip=1" target="_blank" class="notice_tip" data-type="1" data-lg-tj-id="7k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_b,1天内将被自动回绝简历数,number"><strong>'+counters.WILL_BE_REJECTED+'</strong>份简历1天内将被自动回绝！</a>');
                }
                if(counters.REJECTED && counters.REJECTED != 0 ){
                    noticePopTip.push('<a href="http://hr.lagou.com/interview/haveRefuselist.html?nt_flag=2" target="_blank" class="notice_tip" data-type="3" data-lg-tj-id="7l00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-gatj-msg="header_b,已自动回绝简历数,number">已帮你自动回绝了<strong>'+counters.REJECTED+'</strong>份简历！</a>');
                }

                noticePopTip.push('</div>');

                //弹出tip和红点
                noticeDotObj.removeClass("dn");
                wraperNoticeObj.append(noticePopTip.join(''));


                //全部已读
                $('#noticeTip a.closeNT').click(function(){
                    //与后台交互，消息标识为已读
                    PASSPORT.util.rpc({
                        params:{},
                        url:urls.clearAll,
                        succ:function(data){
                            $('#noticeTip').remove();
                            $("#noticeDot").addClass("dn");
                        },
                        fail:function(data){
                             console.log('fail:' + data);
                        }
                    });
                });

                //B端消息绑定单击事件
                var notice_tip = $("#noticeTip .notice_tip");
                notice_tip.bind("click",function(){
                    var _this = $(this);
                    //获取当前点击的消息类型
                    var type = _this.data("type");
                    //告诉后台哪种类型的消息一经被查看
                    PASSPORT.util.rpc({
                        params:{"nt":type},
                        url:urls.clearAll,
                        succ:function(data){
                            _this.remove();
                            if($("#noticeTip .notice_tip").length <= 0){
                                $('#noticeTip').remove();
                                noticeDotObj.addClass("dn");
                            }
                        },
                        fail:function(data){
                             console.log('fail:' + data);
                        }
                    });
                });
            }
        },
        fail:function(data){
            console.log('fail:' + data);
        }
    });

}

</script>

<script charset="utf-8" class="lazyload" src="/Public/css3/lagou.js"></script><script charset="utf-8" class="lazyload" src="/Public/css3/stringifyJSON.js"></script><script charset="utf-8" class="lazyload" src="/Public/css3/md5.js"></script></head>
<body><iframe style="display: none;"></iframe><style type="text/css">.WPA3-SELECT-PANEL { z-index:2147483647; width:463px; height:292px; margin:0; padding:0; border:1px solid #d4d4d4; background-color:#fff; border-radius:5px; box-shadow:0 0 15px #d4d4d4;}.WPA3-SELECT-PANEL * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none; font-family:Microsoft YaHei,Simsun;}.WPA3-SELECT-PANEL a { cursor:auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-TOP { height:25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE { float:right; display:block; width:47px; height:25px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE:hover { background-position:0 -25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-MAIN { padding:23px 20px 45px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-GUIDE { margin-bottom:42px; font-family:"Microsoft Yahei"; font-size:16px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-SELECTS { width:246px; height:111px; margin:0 auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT { float:right; display:block; width:88px; height:111px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat 0 -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT:hover { background-position:-88px -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-AIO-CHAT { float:left;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ { display:block; width:76px; height:76px; margin:6px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat -50px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ-ANONY { background-position:-130px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-LABEL { display:block; padding-top:10px; color:#00a2e6; text-align:center;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-BOTTOM { padding:0 20px; text-align:right;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-INSTALL { color:#8e8e8e;}</style><style type="text/css">.WPA3-CONFIRM { z-index:2147483647; width:285px; height:141px; margin:0; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAACNCAMAAAC9pV6+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU5QUIyQzVCNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU5QUIyQzVDNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTlBQjJDNTk1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTlBQjJDNUE1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6QoyAtAAADAFBMVEW5xdCkvtNjJhzf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) no-repeat;}.WPA3-CONFIRM { *background-image:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/panel.png);}.WPA3-CONFIRM * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none;}.WPA3-CONFIRM * { font-family:Microsoft YaHei,Simsun;}.WPA3-CONFIRM .WPA3-CONFIRM-TITLE { height:40px; margin:0; padding:0; line-height:40px; color:#2b6089; font-weight:normal; font-size:14px; text-indent:80px;}.WPA3-CONFIRM .WPA3-CONFIRM-CONTENT { height:55px; margin:0; line-height:55px; color:#353535; font-size:14px; text-indent:29px;}.WPA3-CONFIRM .WPA3-CONFIRM-PANEL { height:30px; margin:0; padding-right:16px; text-align:right;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON { position:relative; display:inline-block!important; display:inline; zoom:1; width:99px; height:30px; margin-left:10px; line-height:30px; color:#000; text-decoration:none; font-size:12px; text-align:center;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON-FOCUS { width:78px;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON .WPA3-CONFIRM-BUTTON-TEXT { line-height:30px; text-align:center; cursor:pointer;}.WPA3-CONFIRM-CLOSE { position:absolute; top:7px; right:7px; width:10px; height:10px; cursor:pointer;}</style>

	<div id="body">

		<!--B端头部通栏广告位-->
		<!-- <div id="top_bannerB">
    <a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div> -->
		<div id="lg_header">

			<!--B端头部黑色导航-->
				<div id="lg_tbar">

		<div class="inner">

			<div class="lg_tbar_l">
				<a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5l00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
				<a href="http://www.lagou.com/" class="lg_os" data-lg-tj-id="5m00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">拉勾网首页</a>
			</div>

			<ul class="lg_tbar_r reset">
				<li>
					<a href="http://www.lagou.com/corpPosition/create.html" data-lg-tj-id="5n00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" target="_blank">发布新职位</a>
				</li>
				<li>
					<a href="http://www.lagou.com/c/myhome.html" class="bl" data-lg-tj-id="5o00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" target="_blank">公司主页</a>
				</li>
				<li class="user_dpdown">
					<span class="unick bl">刘鹏</span>
					<em class="noticeDot dn" id="noticeDot"></em>
					<i></i>
					<ul class="reset">
						<li>
							<a href="http://www.lagou.com/hr/info.html" data-lg-tj-id="5p00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">招聘设置</a>
						</li>
						<li>
							<a href="http://account.lagou.com/account/accountBind.html" rel="nofollow" data-lg-tj-id="5q00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">帐号设置</a>
						</li>
						<li>
							<a href="http://www.lagou.com/" data-lg-tj-id="5r00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">拉勾首页</a>
						</li>
						<li>
							<a href="http://www.lagou.com/frontLogout.do" data-lg-tj-id="5s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
						</li>
					</ul>
				</li>
			</ul>

		</div>

	</div><!--end #lg_tbar-->

			<!--B端头部白色导航-->
				<div id="lg_tnav">

		<div class="inner">
			<div class="lg_tnav_l">
				<a href="http://hr.lagou.com/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
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
					<a href="http://www.lagou.com/corpPosition/positions.html" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
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

	</div><!--end #lg_tnav-->

		</div><!--end #header-->

		<div id="container">
    <div class="content_mid">
        <!--form-->  
            <dl class="c_section c_section_service">
                <dt>
                    <h2><em></em>开通招聘服务</h2>
                </dt>
                <dd>
                	<div class="os_step_1"></div>
	                <form id="bindForm" class="corp_form">
	                    <input id="resubmitToken" value="f207cb94bdb84821beec3e0d7d9b2281" type="hidden">
	                 	<h3><em class="redstar">*</em>联系电话 <span>（请填写真实有效的电话号码，方便系统校验使用）</span></h3>
	                    <input id="tel" name="tel" maxlength="30" placeholder="请输入你的手机号码或座机号码" autocomplete="off" type="text">	
	                 	<h3><em class="redstar">*</em>接收简历邮箱 <span>（该邮箱为公司邮箱，审核通过后不可更改）</span></h3>
	                    <input id="email" name="email" placeholder="请输入你的公司邮箱作为接收简历邮箱" autocomplete="off" type="text">	
	                    <span class="error" style="display:none;" id="beError"></span>
	                    <input id="bindSubmit" value="下一步" type="submit">
                    </form>
                    <div class="contactus">
	                    <table>
	                    	<tbody><tr>
	                    		<td colspan="2">常见问题：</td>
	                    	</tr>
	                    	<tr>
	                    		<td valign="top">问：</td>
	                    		<td>填写个人邮箱可以么？</td>
	                    	</tr>
	                    	<tr>
	                    		<td valign="top">答：</td>
	                    		<td>不可以。为了保证每个职位的真实性，拉勾网严格要求招聘方必须提供公司邮箱。（公司邮箱是指以你的公司网址为后缀的免费公司邮箱，例如拉勾网的公司邮箱后缀是@lagou.com）即使是初创公司也必须提供公司邮箱才允许开通招聘。</td>
	                    	</tr>
	                    	<tr>
	                    		<td valign="top">问：</td>
	                    		<td>没有企业邮箱怎么办？</td>
	                    	</tr>
	                    	<tr>
	                    		<td valign="top">答：</td>
	                    		<td>目前主流企业邮箱服务商都提供免费版产品，你可以选择常用的腾讯企业邮、网易企业邮、263企业邮等。在官网上登记资料后，很快有服务人员联系。</td>
	                    	</tr>
	                    	<tr>
	                    		<td colspan="2"><br>如有其它问题，请发送问题到<a href="mailto:vivi@lagou.com">vivi@lagou.com</a>，我们会尽快为你解决。</td>
	                    	</tr>
	                    </tbody></table>
                    </div>
                </dd>
            </dl>
       	</div>

<script type="text/javascript" src="/Public/css3/services.js"></script>
<script type="text/javascript">
function edit(){
	var element = document.getElementById("email");
	if("\v"=="v") {
		element.onpropertychange = webChange;
	}else{
		element.addEventListener("input",webChange,false);
	}
	function webChange(){
		$('#beError').text('').hide();
	}
}
edit(); 
</script>
<!-- footer样式 -->
<link href="/Public/css3/main.css" rel="stylesheet">

			<div class="clear"></div>
			<input id="resubmitToken" value="f207cb94bdb84821beec3e0d7d9b2281" type="hidden">
	    	<a id="backtop" title="回到顶部" rel="nofollow"></a>
	    	<!--product feedback-->
	    	<!--我要反馈按钮-->
<div id="product-fk">
	<div id="feedback-icon">
	<div class="fb-icon"></div>
	<span>我要反馈</span>
	<em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~<i></i></em>
	<em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

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
			<input name="email" placeholder="留下邮箱方便我们沟通（选填）" type="text">
			<span class="ensure">确定</span>
		</div>
	</form>
	<input id="login-email" value="1873470124@qq.com" type="hidden">
	<input id="login-phone" value="" type="hidden">
	<input id="login-realUserId" value="3051880" type="hidden">
</div>

<script>
	// 关闭
	//3s tips消失
	window.global = window.global || {};
	global.email = "1873470124@qq.com";
	global.idmd5 = "3051880";
	global.usertoken = jQuery.cookie('user_trace_token');

</script>
<script src="/Public/css3/feedback.js"></script>
	    </div><!-- end #container -->
	</div><!-- end #body -->
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
			    <a id="onlineService" href="javascript:void(0);" rel="nofollow">在线交流</a>
				<span class="tel">服务热线：<em>400-605-9900 (9:00 -19:00)</em></span>
			</div>
			<div class="copyright">
                <span><em>©</em>2015 Lagou </span>
                <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
                <span>京公网安备11010802017116号</span>
            </div>
		</div>
	</div>

<script type="text/javascript" src="/Public/css3/core.js"></script>
<script type="text/javascript" src="/Public/css3/analytics_002.js"></script><script src="/Public/css3/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/css3/plat_tj.js"></script>
<script type="text/javascript">
    jQuery.getScript("http://wpa.b.qq.com/cgi/wpa.php",function(){
        BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'onlineService'});
    });
</script>


	<div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>