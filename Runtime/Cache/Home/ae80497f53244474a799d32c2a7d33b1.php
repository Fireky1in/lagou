<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" charset="utf-8" async="" src="/Public/css/contains.js"></script><script type="text/javascript" charset="utf-8" async="" src="/Public/css/taskMgr.js"></script><script type="text/javascript" charset="utf-8" async="" src="/Public/css/views.js"></script><script charset="utf-8" src="/Public/css/v.js"></script><script async="" src="/Public/css/analytics.js"></script><script async="" src="/Public/css/a.js"></script>
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


<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script type="text/javascript">
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
var GLOBAL_DOMAIN =  window.GLOBAL_DOMAIN || {
	ctx : "http://www.lagou.com",
	rctx : "http://hr.lagou.com",
	pctx : "http://passport.lagou.com",
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

<script src="/Public/css/hotword"></script><link href="/Public/css/style(2).css" rel="stylesheet" class="lazyload" charset="utf-8"><script src="/Public/css/stringifyJSON.min.js" class="lazyload" charset="utf-8"></script><link href="/Public/css/loginPop.css" rel="stylesheet" class="lazyload" charset="utf-8"><script src="/Public/css/md5.js" class="lazyload" charset="utf-8"></script></head>
<body><iframe style="display: none;"></iframe><style type="text/css">.WPA3-SELECT-PANEL { z-index:2147483647; width:463px; height:292px; margin:0; padding:0; border:1px solid #d4d4d4; background-color:#fff; border-radius:5px; box-shadow:0 0 15px #d4d4d4;}.WPA3-SELECT-PANEL * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none; font-family:Microsoft YaHei,Simsun;}.WPA3-SELECT-PANEL a { cursor:auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-TOP { height:25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE { float:right; display:block; width:47px; height:25px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CLOSE:hover { background-position:0 -25px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-MAIN { padding:23px 20px 45px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-GUIDE { margin-bottom:42px; font-family:"Microsoft Yahei"; font-size:16px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-SELECTS { width:246px; height:111px; margin:0 auto;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT { float:right; display:block; width:88px; height:111px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat 0 -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-CHAT:hover { background-position:-88px -80px;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-AIO-CHAT { float:left;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ { display:block; width:76px; height:76px; margin:6px; background:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/SelectPanel-sprites.png) no-repeat -50px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-QQ-ANONY { background-position:-130px 0;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-LABEL { display:block; padding-top:10px; color:#00a2e6; text-align:center;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-BOTTOM { padding:0 20px; text-align:right;}.WPA3-SELECT-PANEL .WPA3-SELECT-PANEL-INSTALL { color:#8e8e8e;}</style><style type="text/css">.WPA3-CONFIRM { z-index:2147483647; width:285px; height:141px; margin:0; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAR0AAACNCAMAAAC9pV6+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU5QUIyQzVCNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU5QUIyQzVDNUIwQTExRTJCM0FFRDNCMTc1RTI3Nzg4Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTlBQjJDNTk1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTlBQjJDNUE1QjBBMTFFMkIzQUVEM0IxNzVFMjc3ODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6QoyAtAAADAFBMVEW5xdCkvtNjJhzf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) no-repeat;}.WPA3-CONFIRM { *background-image:url(http://combo.b.qq.com/crm/wpa/release/3.3/wpa/views/panel.png);}.WPA3-CONFIRM * { position:static; z-index:auto; top:auto; left:auto; right:auto; bottom:auto; width:auto; height:auto; max-height:auto; max-width:auto; min-height:0; min-width:0; margin:0; padding:0; border:0; clear:none; clip:auto; background:transparent; color:#333; cursor:auto; direction:ltr; filter:; float:none; font:normal normal normal 12px "Helvetica Neue", Arial, sans-serif; line-height:16px; letter-spacing:normal; list-style:none; marks:none; overflow:visible; page:auto; quotes:none; -o-set-link-source:none; size:auto; text-align:left; text-decoration:none; text-indent:0; text-overflow:clip; text-shadow:none; text-transform:none; vertical-align:baseline; visibility:visible; white-space:normal; word-spacing:normal; word-wrap:normal; -webkit-box-shadow:none; -moz-box-shadow:none; -ms-box-shadow:none; -o-box-shadow:none; box-shadow:none; -webkit-border-radius:0; -moz-border-radius:0; -ms-border-radius:0; -o-border-radius:0; border-radius:0; -webkit-opacity:1; -moz-opacity:1; -ms-opacity:1; -o-opacity:1; opacity:1; -webkit-outline:0; -moz-outline:0; -ms-outline:0; -o-outline:0; outline:0; -webkit-text-size-adjust:none;}.WPA3-CONFIRM * { font-family:Microsoft YaHei,Simsun;}.WPA3-CONFIRM .WPA3-CONFIRM-TITLE { height:40px; margin:0; padding:0; line-height:40px; color:#2b6089; font-weight:normal; font-size:14px; text-indent:80px;}.WPA3-CONFIRM .WPA3-CONFIRM-CONTENT { height:55px; margin:0; line-height:55px; color:#353535; font-size:14px; text-indent:29px;}.WPA3-CONFIRM .WPA3-CONFIRM-PANEL { height:30px; margin:0; padding-right:16px; text-align:right;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON { position:relative; display:inline-block!important; display:inline; zoom:1; width:99px; height:30px; margin-left:10px; line-height:30px; color:#000; text-decoration:none; font-size:12px; text-align:center;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON-FOCUS { width:78px;}.WPA3-CONFIRM .WPA3-CONFIRM-BUTTON .WPA3-CONFIRM-BUTTON-TEXT { line-height:30px; text-align:center; cursor:pointer;}.WPA3-CONFIRM-CLOSE { position:absolute; top:7px; right:7px; width:10px; height:10px; cursor:pointer;}</style>

	<div id="body">
    

		<!--C端头部通栏广告位-->
		<!-- <div id="top_bannerC">
    <a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div> -->
		<!-- 验证注册邮箱 -->
		
		<div id="lg_header">

			<!--C端头部黑色导航-->
        
    	<div id="lg_tbar">
        

    		<div class="inner">

    			<div class="lg_tbar_l">
    				<a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
    				<a href="http://hr.lagou.com/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
    			</div>

    			
    			<ul class="lg_tbar_r reset">
    				<li>
    					<a href="http://www.lagou.com/frontLogin.do" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
    				</li>
    				<li>
    					<a href="http://www.lagou.com/frontRegister.do" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
    				</li>
    			</ul>

    			
    		</div>
        
    	</div><!--end #lg_tbar-->
        
			<!--C端头部白色导航-->
				<div id="lg_tnav">
        

		<div class="inner">
			<div class="lg_tnav_l">
				<a href="/Public/css/lagou.html" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
					<h1>拉勾网</h1>
				</a>
								<div class="suggestCity"><strong>北京站</strong><em id="changeCity_btn">[切换城市]</em></div>
							</div>
			<ul class="lg_tnav_wrap reset">
				<li>
					<a href="/Public/css/lagou.html" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
				</li>
				<li>
					<a href="http://www.lagou.com/gongsi/" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
				</li>
				<li>
					<a href="http://pai.lagou.com/index.html" data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
				</li>
				<!-- <li>
					<a href="#" rel="nofollow">内容频道</a>
				</li> -->
			</ul>

		</div>

	</div><!--end #lg_tnav-->

		</div><!--end #lg_header-->

		<!-- 数据展示类接口需要版本号 -->
	    <input type="hidden" id="version" value="1.5.6_2015102818">

	    <div id="container" style="min-height: 844px;">
        

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
<script type="text/javascript" src="/Public/css/core.js"></script>
<script type="text/javascript" src="/Public/css/analytics(1).js"></script><script src="/Public/css/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/css/plat_tj.js"></script>
<script type="text/javascript">
	BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="/Public/css/login.html" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>