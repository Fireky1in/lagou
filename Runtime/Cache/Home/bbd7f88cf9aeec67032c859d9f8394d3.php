<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>一拍 · 即合-拉勾网-最专业的互联网招聘平台</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=10;IE=9;IE=8;IE=7;IE=EDGE">
    -->
    <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">
    <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">http://pai.lagou.com</div>
-->
<script type="text/javascript">
var ctx = "http://pai.lagou.com";
var lctx = "http://www.lagou.com";
</script>
<!-- <link rel="stylesheet" href="http://www.lagou.com/css/subject/header.css?v=1.5.5.7_102001" />
-->
<link rel="stylesheet" href="/Public/Home/yipai/audit/header.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipai/audit/common.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipai/audit/foot.css?v=1.5.5.7_102001" />
<script src="/Public/Home/yipai/audit/jquery.min.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipai/audit/jquery.lib.min.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipai/audit/common.min.js?v=1.5.5.7_102001"></script>
<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico?v=1.5.5.7_102001">
<link rel="stylesheet" href="/Public/Home/yipai/audit/nav-head.css?v=1.5.5.7_102001"/>
<!-- 头部样式 -->
</head>
<body>
<div class="pai-nav">
    <div class="pai-nav-top">
    <ul class="top-left">
        <li class="nav-icon"></li>
        <li>
            <a href="http://www.lagou.com/app/download.html" class="lagou-app">拉勾APP</a>
        </li> <em></em>
        <li>
            <a href="http://pai.lagou.com/switchUserType.html?type=1">我要招人</a>
        </li>
    </ul>
    <!-- C端 -->
    <ul class="top-right">
    <?php if(session('?user')):?>
        <li>
            <a href="http://www.lagou.com/resume/myresume.html">我的简历</a>
        </li> <em></em>
        <li>
            <a href="http://www.lagou.com/mycenter/delivery.html">投递箱</a>
        </li>
        <em></em>
        <li>
            <a href="http://www.lagou.com/mycenter/collections.html">收藏夹</a>
        </li>
        <em></em>
        <li class="nav-user" id="nav-user-li" >
            <a href="javascript:;" id="nav-users"><?php echo session('user')['username'];?></a>
            <span style=''></span>
            <ul class="nav-select" style='z-index:999;'>
                <li>
                    <a href="http://www.lagou.com/s/subscribe.html">我的订阅</a>
                </li>
                <li>
                    <a href="http://pai.lagou.com/frontLogout.do" id='logouta' style="margin-bottom: 10px;">退出</a>
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
            <a href="http://www.lagou.com/app/download.html" class="lagou-app">拉勾APP</a>
        </li> <em></em>
        <li>
            <a href="http://pai.lagou.com/switchUserType.html?type=1">我要招人</a>
        </li>
    <?php endif ?>
    </ul>
</div>
    <div class="pai-nav-bottom">
        <div class="nav-wrapper">
            <ul class="bottom-left">
                <a href="http://www.lagou.com">
                    <li class="pai-lagou"></li>
                </a>
                <em></em>
                <li>
                    <a href="http://pai.lagou.com">一拍</a>
                </li>
            </ul>
            <ul class="bottom-right">
                <li class="">
                    <a href="http://pai.lagou.com">一拍首页</a>
                </li>

                <li class="">
                    <a href="http://pai.lagou.com/talent/guide.html">使用攻略</a>
                </li>
            </ul>
            <a href="http://www.lagou.com" id="nav-go-back" style=''>回拉勾</a>
        </div>
    </div>
</div>
<script></script>
<link rel="stylesheet" href="/Public/Home/yipai/audit/audit.css?v=1.5.5.7_102001"/>
</head>
<body>
<div id="body">
    <div id="container">
        <div id='container-right'>
            <h1>报名申请已提交，请等待审核</h1>
            <p>
                审核结果会在两个工作日内通知你。在此期间，为方便职业顾问更准确的筛选判断，请尽快完善以下在线简历信息：&nbsp;&nbsp;&nbsp;
                <span>基本信息、项目经验、工作经历、教育经历、作品展示</span>
            </p>
            <p class='text-resume'>
                现在就去
                <a href="http://www.lagou.com/resume/myresume.html">>>完善简历</a>
            </p>
            <h2>
                <span>微信扫一扫</span>
                ，第一时间获知审核结果
            </h2>
        </div>

        <div class="img-wrapper">
            <img width="204" height="202" src="http://www.lagou.com/qr/qrcode.jpg?qrSource=paiAudit" alt="二维码"/>

            <p>【仅限本人使用】</p>
        </div>
        <!-- <div class="container-right-go-back">
        <a href="#">返回一拍首页 》</a>
    </div>
    -->
</div>
</div>

<!-- <div id="subject_footer"></div>
/.footer -->
<script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>
<!--ignore-->
<div id="footer">
<div class="wrapper"> <i class="footer_lagou_icon"></i>
<div class="inner_wrapper">
    <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">
        拉勾APP
        <span></span> <i></i>
    </a>
    <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
    <a class="footer_qr" href="javascript:void(0)" rel="nofollow">
        拉勾微信
        <i></i>
    </a>
    <a href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
    <a href="/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
    <a href="${FE_base}/about.html" target="_blank" rel="nofollow">联系我们</a>
    <a id="BizQQWPA" href="javascript:void(0);" rel="nofollow">在线交流</a>
    <span class="tel">
        服务热线：
        <em>400-605-9900 (9:00 -19:00)</em>
    </span>
</div>
<div class="copy">
    <span>
        <em>&copy;</em>
        2015 Lagou
    </span>
    <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
    <span>京公网安备11010802017116号</span>
</div>
</div>
</div>
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>
<div class="totop-wrapper" style="width:1024px;margin:0 auto;">
<a style="display: none;margin-left: 1060px" id="backtop" title="回到顶部" rel="nofollow"></a>
<!--我要反馈按钮-->
<div id="product-fk">
<div id="feedback-icon">
    <div class="fb-icon"></div>
    <span>我要反馈</span>
    <em class="error dn fk-limit">今天已经反馈足够多了，给Candy点时间消化下吧~
        <i></i></em> 
    <em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

<div id="feedback-con">
<div class="pfb-pho-close">
    <div class="pfb-pho"></div>
    <div class="pfb-close"></div>
</div>
<em class="error dn"><span>你还没填任何反馈呢</span>
    <i></i></em> 

<form id="product-fb">
    <div class="pfb-txt">
        <textarea placeholder="我是一拍的小管家Candy，把你遇到的问题，对一拍的意见或建议告诉我吧（200字以内）" maxlength="200"></textarea>
    </div>
    <div class="pfb-email" style="height:60px;">
        <input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）"/>
        <span class="ensure">确定</span>
    </div>
</form>
</div>
<script>
    // 关闭
    //3s tips消失
    window.global = window.global || {};
    global.email = "513709055@qq.com";
    global.usertoken = jQuery.cookie('user_trace_token');
</script>
</div>
<script src="http://pai.lagou.com/js/feedback.min.js"></script>
<script>
//小火箭
$(window).scroll(function(){
    if((document.documentElement.scrollTop || document.body.scrollTop) > 0){
        $("#backtop").show();
    }else{
        $("#backtop").hide();
    }
});
$("#backtop").click(function(){pageScroll();});
function pageScroll(){
    $("#backtop").css("background-position-x","-28px");
    window.scrollBy(0,-20);
    var scrolldelay = setTimeout('pageScroll()',1);
    if(document.documentElement.scrollTop == 0 && document.body.scrollTop == 0){
        $("#backtop").css("background-position-x","0");
        clearTimeout(scrolldelay);
    }
}
//小火箭结束
$(".collapsible_menu").hover(function(){
    $(this).addClass("expend");
    $("dd",this).show();
},function(){
    $(this).removeClass("expend");
    $("dd",this).hide();
});

//鼠标悬浮显示微信二维码
//footer_qr
$('.footer_qr').hover(function(){
    $("i", this).stop().fadeIn(200);
},function(){
    $("i", this).stop().fadeOut(200);
});

//footer-app
$('.footer_app').hover(function(){
    $("i", this).stop().fadeIn(200);
},function(){
    $("i", this).stop().fadeOut(200);
});
//是否加vip图标
function callback(response) {
    if(response.success==true&&response.state==1){
        $("#nowrap").parent().addClass('plus-vip');
        if($('#accountSetting')[0]){
            $('#accountSetting')[0].href="http://hr.lagou.com/baseinfo/accountDetail.html";
        }
    }
}
jQuery.ajax({
    url:"http://hr.lagou.com/plus/getVipTip.json",
    dataType: 'jsonp',
    jsonp: 'jsoncallback'
}).done(function (response) {
    callback && callback(response);
});
</script>
<script src="/Public/Home/yipai/audit/artTemplate.min.js"></script>

<script defer id="_lgpassport_" data-css-site="0" data-css-popup="0" src="http://passport.lagou.com/static/js/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){
                
    }
</script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/tongji.js?v=1.5.5.7_102001"></script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/analytics.js?v=1.5.5.7_102001"></script>
<script src="http://pai.lagou.com/js/talents/intro.js?v=1.5.5.7_102001"></script>
<!--<script src="http://pai.lagou.com/js/talents/gcode.js?v=1.5.5.7_102001"></script>
-->
</body>
</html>