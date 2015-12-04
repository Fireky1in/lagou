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




    <link rel="stylesheet" type="text/css" href="/Public/Home/register/main_46e501a.css">
</head>
<body>

<!-- 页面主体START -->
<header class="sso_header">
	<a href="http://www.lagou.com/" class="logo"></a>
</header>
<input type="hidden" value="" id="isVisiable_request_form_verifyCode">
<section class="content_box cleafix">
	<div class="left_area fl">
		<form action="" method="">
			<ul class="form_head clearfix">
				<li class="active">
					<i class="icon icon_phone"></i>
					手机号码注册
				</li>
				<li>
					<i class="icon icon_mail"></i>
					邮箱注册
				</li>
			<span class="tab_active"></span></ul>
			<div class="form_body" data-view="phoneRegister">
				<div class="input_item clearfix"  style="display: block;">
					<input type="text" class="input input_white" id="tel" name="tel" placeholder="请输入常用手机号码" data-required="required" autocomplete="off"> 
				</div>
				<div class="input_item"  data-controltype="PhoneVerificationCode" style="display: block;">
					<div class="input_group clearfix">
						<input type="text" class="input input_white first_child" id="" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
						<input type="button" class="btn btn_green btn_active btn_lg last_child" value="获取验证码" data-required="required">
					</div>
				</div>
				<div class="input_item clearfix" data-controltype="Password" style="display: block;">
					<input type="password" class="input input_white" id="" name="" placeholder="请输入密码" data-required="required" autocomplete="off">
				</div>
				<div class="input_item clearfix" data-propertyname="request_form_verifyCode"  style="display:none;">
					<input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
					<img src="" alt="" class="yzm">
					<a href="javascript:;" class="reflash"></a>
				</div>
				<div class="input_item clearfix"  data-controltype="Switch" style="display: block;">
					<input type="button" class="btn btn_outline btn_lg" value="找工作" data-myvalue="0">
					<input type="button" class="btn btn_outline btn_lg last_child" value="招人" data-myvalue="1">
				</div>
				<div class="input_item clearfix" style="margin-top: 16px; display: block;" data-controltype="CheckBox">
					
				</div>
				<div class="input_item clearfix"  data-controltype="Botton" style="display: block;">
					<input type="button" class="btn btn_green btn_active btn_block btn_lg" value="注 册">
				</div>
			</div>
			<script type="text/javascript" src='/Public/Home/register/jquery-1.11.3.min.js'></script>
			<script type="text/javascript">
				$(function(){
					$('#tel').blur(function(){
						alert(111);
					});
				});
			</script>
			<div class="form_body" data-view="emailRegister" style="display:none;">
				<div class="input_item clearfix" data-propertyname="email" data-controltype="Email" style="display: block;">
					<input type="text" class="input input_white" name="" placeholder="请输入常用邮箱地址" data-required="required" autocomplete="off">
				</div>
				<div class="input_item clearfix" data-propertyname="password" data-controltype="Password" style="display: block;">
					<input type="password" class="input input_white" name="" placeholder="请输入密码" data-required="required" autocomplete="off">
				</div>
				<div class="input_item clearfix" data-propertyname="request_form_verifyCode" data-controltype="VerifyCode" style="display: none;">
					<input type="text" class="input input_white fl" style="width:130px; display:block;" name="" placeholder="请输入验证码" data-required="required" autocomplete="off">
					<img src="" alt="" class="yzm">
					<a href="javascript:;" class="reflash"></a>
				</div>
				<div class="input_item clearfix" data-propertyname="type" data-controltype="Switch" style="display: block;">
					<input type="button" class="btn btn_outline btn_lg" value="找工作" data-myvalue="0">
					<input type="button" class="btn btn_outline btn_lg last_child" value="招人" data-myvalue="1">
				</div>
				<div class="input_item clearfix" data-propertyname="protocol" data-controltype="CheckBox" style="display: block;">

				</div>
				<div class="input_item clearfix" data-controltype="Botton" style="display: block;">
					<input type="button" class="btn btn_green btn_active btn_block btn_lg" value="注 册">
				</div>
			</div>
		</form>
	</div>
	<div class="divider fl">
		<img src="/Public/Home/register/divider_a3c3658.jpg" alt="分割线">
	</div>
	
	<div class="right_area fl">
		<h5>已有拉勾帐号:</h5>
		<a href="http://passport.lagou.com/login/login.html" class="login_now">直接登录</a>
		<h5>使用以下帐号直接登录:</h5>
		<ul class="vender_login clearfix">
			<li><a href="http://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank"></a></li>
			<li><a href="http://passport.lagou.com/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank"></a></li>
			<li class="last_child"><a href="http://passport.lagou.com/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank"></a></li>
		</ul>
		<div class="qrcode">
			<img src="/Public/Home/register/qrcode_0ec6bff.jpg" alt="二维码">
			<p>[ 扫码下载拉勾APP ]</p>
		</div>
	</div>
</section>
<!-- 页面主体END -->
<footer>
	<h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- jquery lib --><!--拉勾UI框架 --><!-- analytics js file --><!-- plat analytics js file -->
<script charset="utf-8" src="/Public/Home/register/v.js"></script><script async="" src="/Public/Home/register/analytics.js"></script><script async="" src="/Public/Home/register/a.js"></script><script type="text/javascript" src="/Public/Home/register/jquery.min_7506461.js"></script>
<script type="text/javascript" src="/Public/Home/register/vendor_d69534d.js"></script><script src="/Public/Home/register/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/register/md5_db17d97.js"></script>
<script type="text/javascript" src="/Public/Home/register/main.html_aio_81cbd0f.js"></script>
<script type="text/javascript">var GLOBAL_DOMAIN=window.GLOBAL_DOMAIN||{ctx:"http://www.lagou.com",rctx:"http://hr.lagou.com",pctx:"http://passport.lagou.com",actx:"http://account.lagou.com",paictx:"http://pai.lagou.com",sctx:"http://suggest.lagou.com"};
require(["pc/page/register/main"]);
$("input").placeholder();</script>

</body></html>