<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
    
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>
            公司介绍-招聘服务-拉勾网-最专业的互联网招聘平台
        </title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/HomeStyle/js/excanvas.js">
            </script>
        <![endif]-->
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
            <!-- end #header -->
            <div id="container">
                <div class="content_mid">
                    <dl class="c_section c_section_mid">
                        <dt>
                            <h2>
                                <em></em>
                                填写公司信息
                            </h2>
                            <a class="c_addjob" href="create.html">
                                <i></i>
                                发布新职位
                            </a>
                        </dt>
                        <dd>
                            <div class="c_text">
                                背景深、规模大、发展快、氛围好…用优势吸引求职者吧！
                            </div>
                            <img width="668" height="56" class="c_steps" alt="第五步" src="/Public/HomeStyle/images/step5.png">
                            <!-- action="http://www.lagou.com/c/saveProfile.json" -->
                            <form method="post" action="<?php echo U('Home/CompanyReg/step8');?>" id="infoForm" onsubmit="return $.sub(this);">
                                <h3>
                                    公司介绍
                                </h3>
                                <textarea placeholder="请分段详细描述公司简介、企业文化等" name="desc" id="companyProfile"></textarea>
                                <div class="word_count">
                                    你还可以输入
                                    <span>
                                        1000
                                    </span>
                                    字
                                </div>
                                <div class="clear"></div>
                                <input type="submit" id="step5Submit" value="保存，完成" class="btn_big fr">
                            </form>
                        </dd>
                    </dl>
                </div>
                <div class="clear"></div>
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;">
                </a>
            </div>
            <!-- end #container -->
        </div>
        <!-- end #body -->
       <link href="/Public/css3/main.css" rel="stylesheet">
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
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
        <script src="/Public/HomeStyle/js/step5.min.js" type="text/javascript"></script>
        <!-- -->
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
                                window.location.href = data.url;
                            }
                        });
                        return false;
                    }
                })
            })
        </script>
    </body>

</html>