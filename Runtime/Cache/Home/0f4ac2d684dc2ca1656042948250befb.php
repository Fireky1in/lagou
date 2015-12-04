<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta property="qc:admins" content="23635710066417756375">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
<meta charset="UTF-8">

<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

<title>找工作-互联网招聘求职网-拉勾网</title>


    <link rel="stylesheet" type="text/css" href="/Public/Home/main_1f7f687.css">
</head>
<body>
	
<!-- 页面主体START -->
<header class="sso_header">
	<a href="http://www.our.com/" class="logo">
	</a>
</header>
<section class="content_box cleafix">
	<div class="left_area fl">
		<form action="<?php echo U('Home/Login/doTopLogin');?>" method="post" id='forup'>
			<div class="form_body" data-view="loginView">
				<div class="input_item clearfix" style="display: block;">
					<input type="text" class="input input_white" id="email" name="email" placeholder="请输入已验证手机/邮箱" data-required="required" autocomplete="off" autofocus> 
					<div id='userinfo' style="height:20px;line-height:20px;color:red"></div>
				</div>
				<div class="input_item clearfix"  style="display: block;">
					<input type="password" class="input input_white" id="password" name="password" placeholder="请输入密码" data-required="required" autocomplete="off"> 
					<div id='pwdinfo' style="height:20px;line-height:20px;color:red"></div>
				</div>
				<div class="input_item clearfix" data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display:none;">
					<input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
					<img src="" alt="" class="yzm">
					<a href="javascript:;" class="reflash"></a>
				</div>
				<div class="input_item clearfix">
					<a href="http://passport.lagou.com/accountPwd/toReset.html" class="forgot_pwd">忘记密码？</a>
				</div>
				<div class="input_item clearfix" style="display: block;">
					<button type="button" class=" btn_green btn_active btn_block btn_lg" id='submitLogin'>登 录</button>
				</div>
				<script type="text/javascript" src='/Public/Home/jquery-1.11.3.min.js'></script>
				<script type="text/javascript">
				var emailres = false;
				var pwdres = false;
				    $('#email').blur(function(){
				        var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				        
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
				        $('#email').blur();
				        $('#password').blur();
				        if(emailres && pwdres){
				            $('#forup').submit();
				        }

				    });
				</script>
				<div class="input_item clearfix">
					<h5 class="reg_now">还没有拉勾帐号？<a href="http://passport.lagou.com/register/register.html">立即注册</a></h5>
				</div>
				<input type="hidden" value="" id="isVisiable_request_form_verifyCode">
			</div>
		</form>
	</div>

	<div class="divider fl">
		<img src="/Public/Home/divider-login_3362138.jpg" alt="分割线">
	</div>
	<div class="right_area fl">
		<h5>使用以下帐号直接登录:</h5>
		<ul class="vender_login clearfix">
			<li><a href="http://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank"></a></li>
			<li><a href="http://passport.lagou.com/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank"></a></li>
			<li class="last_child"><a href="http://passport.lagou.com/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank"></a></li>
		</ul>
		<div class="qrcode">
			<img src="/Public/Home/qrcode_0ec6bff.jpg" alt="二维码">
			<p>[ 扫码下载拉勾APP ]</p>
		</div>
	</div>
</section>

<footer>
	<h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END -->	

<!-- jquery lib --><!--拉勾UI框架 --><!-- analytics js file --><!-- plat analytics js file -->
<script charset="utf-8" src="/Public/Home/v.js"></script><script async="" src="/Public/Home/analytics.js"></script><script async="" src="/Public/Home/a.js"></script><script type="text/javascript" src="/Public/Home/main.html_aio_314ccde.js"></script>
<script type="text/javascript" src="/Public/Home/vendor_d69534d.js"></script><script src="/Public/Home/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/main_d85cbd9.js"></script>
<script type="text/javascript">var GLOBAL_DOMAIN=window.GLOBAL_DOMAIN||{ctx:"http://www.lagou.com",rctx:"http://hr.lagou.com",pctx:"http://passport.lagou.com",actx:"http://account.lagou.com",paictx:"http://pai.lagou.com",sctx:"http://suggest.lagou.com"};
require(["pc/page/login/main"]);
$("input").placeholder();</script>

</body></html>