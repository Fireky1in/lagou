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
<link rel="stylesheet" href="/Public/Home/yipai/header.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipai/common.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipai/foot.css?v=1.5.5.7_102001" />
<script src="/Public/Home/yipai/jquery.min.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipai/jquery.lib.min.js?v=1.5.5.7_102001"></script>
<script src="http://pai.lagou.com/js/common/common.min.js?v=1.5.5.7_102001"></script>
<link rel="Shortcut Icon" href="http://www.lagou.com/Public/Home/yipai/favicon.ico?v=1.5.5.7_102001">
<link rel="stylesheet" href="/Public/Home/yipai/nav-head.css?v=1.5.5.7_102001"/>
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
                    <a href='<?php echo U("Home/YiPai/index");?>'>一拍首页</a>
                </li>

                <li class="">
                    <a href="http://pai.lagou.com/talent/guide.html">使用攻略</a>
                </li>
            </ul>
            <a href='/' id="nav-go-back" style=''>回拉勾</a>
        </div>
    </div>
</div>
<script></script>
<link rel="stylesheet" href="/Public/Home/yipai/intro.css?v=1.5.5.7_102001"/>
<!--<link href="/Public/Home/yipai/video-js.css?v=1.5.5.7_102001" rel="stylesheet" type="text/css">--></head>
<body>
<div class="header">
    <h1>拉勾一拍，重新定义互联网人才拍卖</h1>

    <p>[ 3年+工作经验，30W+年薪，互联网技术、产品、设计、运营 ]</p>

    <p>1V1专业顾问私人订制</p>

    <p>限时展示，风尖互联网企业机会任你选</p>

    <div class="control clearfix">
        <button class="play  "></button>
        <a class="btn btn-apply" href="<?php echo U('Home/YiPai/send');?>">我要申请</a>
    </div>
</div>
<div class="about">
    <div class="container">
        <h1>大咖专场</h1>
        <div class="row clearfix">
            <div class="column">
                <div class="about-item"> <i class="fe fe-icon1"></i>
                    <h3>你的Boss你来挑</h3>
                    <p>采用企业邀约制，聚集众多优质企业参与，让出色的你获得最大的选择权。</p>
                </div>
            </div>
            <div class="column">
                <div class="about-item"> <i class="fe fe-icon2"></i>
                    <h3>个性化定制服务</h3>
                    <p>每位用户指定一位专属顾问全程跟踪服务；根据用户的独特情况，提供个性化的职业咨询。换工作不再废心废力。</p>
                </div>
            </div>
            <div class="column">
                <div class="about-item">
                    <i class="fe fe-icon3"></i>
                    <h3>保障隐私防打扰</h3>
                    <p>不必担心隐私泄露，私密信息保护、屏蔽企业权力让你无后顾之忧。</p>
                </div>
            </div>
            <div class="column">
                <div class="about-item">
                    <i class="fe fe-icon4"></i>
                    <h3>企业及时反馈</h3>
                    <p>透明顺畅的流程加上尽职尽责的顾问，不必再苦苦等待企业的反馈。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="company">
    <div class="container">
        <h1>参与企业</h1>
        <div class="imgs">
            <img src="/Public/Home/yipai/company_logo.png" width="1024" height="410"></div>
    </div>
</div>
<div class="m-carousel">
    <div class="list" style="left: -100%;">
    <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><div class="item">
            <div class="carousel-content clearfix">
                <div class="head head-icon1"></div>
                <div class="carousel-caption clearfix">
                    <div class="left-quot"></div>
                    <div class="paragraphs">
                        <p class="second-paragraph">
                            333333333333考虑到自身发展，我计划到北京工作。一拍私人职业顾问Jessica找到我，想推荐我上一拍专场，我就抱着试试的心态报名了，没想到收到了好几十个面试邀请。工作这么久，多少有了解过其他招聘网站，一拍无论是在求职流程，还是简历中获取的信息，会更加突出一些，特别是提供私人顾问这样的服务，这种模式让求职者不再处于弱势地位。
                            <span class="right-quot"></span>
                        </p>
                        <br />
                        <br />
                        <p class="author">—— <?php echo ($vo['userName']); ?>·高级服务器开发工程师·友加</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-content clearfix">
                <div class="head head-icon2"></div>
                <div class="carousel-caption clearfix">
                    <div class="left-quot"></div>
                    <div class="paragraphs">
                        <p class="second-paragraph">
                            wsdafd考虑到自身发展，我计划到北京工作。一拍私人职业顾问Jessica找到我，想推荐我上一拍专场，我就抱着试试的心态报名了，没想到收到了好几十个面试邀请。工作这么久，多少有了解过其他招聘网站，一拍无论是在求职流程，还是简历中获取的信息，会更加突出一些，特别是提供私人顾问这样的服务，这种模式让求职者不再处于弱势地位。
                            <span class="right-quot"></span>
                        </p>
                        <br />
                        <br />
                        <p class="author">—— <?php echo ($vo['userName']); ?>·前端开发工程师·象辑科技</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-content clearfix">
                <div class="head head-icon3"></div>
                <div class="carousel-caption clearfix">
                    <div class="left-quot"></div>
                    <div class="paragraphs">
                        <p class="second-paragraph">
                            在一拍还没有开放的时候我就知道一拍了，开放使用后我就报了名。我刚毕业的时候就到上家公司工作，一呆就是4年，求职经验少得可怜。在遇到一拍之后，职业顾问Jessica给予了我很多鼓励和陪伴，帮我解答很多职业困惑，让我慢慢放下了心理负担，她的专业影响了我。从一拍的申请到我最终入职，只用了一周时间，有些不可思议。
                            <span class="right-quot"></span>
                        </p>
                        <br />
                        <br />
                        <p class="author">—— <?php echo ($vo['userName']); ?>·产品运营主管·恒昌利通</p>
                    </div>
                </div>
            </div>
        </div><?php endforeach; endif; ?>  
        
    </div>
    <a href="javascript:;" class="arrow prev"></a>
    <a href="javascript:;" class="arrow next"></a>
</div>
<div class="part part1">
    <h2>一拍流程</h2>

    <div class="step-wrapper clearfix">
        <div class="step step1">
            <i>01</i>

            <h3>一拍报名</h3>

            <p>
                注册、填写基本信息并提交申请。一拍顾问会在2个工作日内通知你报名结果［在这期间，你可以进一步完善在线简历来提高通过几率］。
            </p>
        </div>
        <div class="arrow">
            <i>2天</i>
        </div>
        <div class="step step2">
            <i>02</i>

            <h3>专属定制</h3>

            <p>报名成功后，一拍会为你配备专属私人顾问，进一步沟通了解你的需求，并协助完善你的个人资料，安排你进入一拍专场。</p>
        </div>
        <div class="arrow">
            <i>3天</i>
        </div>
        <div class="step step3">
            <i>03</i>

            <h3>Dating Park</h3>

            <p>
                你的简历会安排在一拍DatingPark专场展示3个工作日。对你感兴趣的企业会发出约见邀请，你可以接受心仪企业的邀约，或先进行私信沟通，你也可以拒绝不感兴趣的面试机会。
            </p>
        </div>
        <div class="arrow">
            <i>1天</i>
        </div>
        <div class="step step4">
            <i>04</i>

            <h3>线下面试</h3>

            <p>
                你同意约见的企业会与你沟通并确定面试时间，贴心的一拍顾问会为你备好专车，送你到达面试地点。同时一拍顾问全程1V1服务，协助你拿到满意的offer。
            </p>
        </div>
    </div>
</div>
<div class="foot-banner">
    <div class="wrapper">
        <p>一拍 · 即合，真的一拍即合</p>
        <a class="btn btn-apply" href="<?php echo U('Home/YiPai/send');?>">我要申请</a>
    </div>
</div>
<div id="shelter" class="hide"></div>
<div id="popVideo" class="hide">
    <div class="video-wrapper">
        <div id="youku" class="" style="width:944px;height:531px"></div>
        <a class="video-close"></a>
    </div>

</div>
<!-- <div id="subject_footer"></div>
/.footer -->
<script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>
<!--ignore-->
<div id="footer">
<div class="wrapper">
    <i class="footer_lagou_icon"></i>
    <div class="inner_wrapper">
        <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">
            拉勾APP
            <span></span>
            <i></i>
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
<script src="/Public/Home/yipai/artTemplate.min.js"></script>

<script defer id="_lgpassport_" data-css-site="0" data-css-popup="0" src="http://passport.lagou.com/static/js/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){
                
    }
</script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/tongji.js?v=1.5.5.7_102001"></script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/analytics.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipai/jquery.cookie.min.js"></script>
<!--<script src="/Public/Home/yipai/video-js/video.min.js"></script>
-->
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script src="http://pai.lagou.com/js/intro_base.min.js?v=1.5.5.7_102001"></script>
<script src="http://pai.lagou.com/js/talents/intro.js?v=1.5.5.7_102001"></script>
</body>
</html>