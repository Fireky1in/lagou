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
var ctx = "http://www.lagou2.com";
var lctx = "http://www.lagou.com";
</script>
<!-- <link rel="stylesheet" href="http://www.lagou.com/css/subject/header.css?v=1.5.5.7_102001" />
-->
<link rel="stylesheet" href="/Public/Home/yipaisend/header.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipaisend/common.css?v=1.5.5.7_102001" />
<link rel="stylesheet" href="/Public/Home/yipaisend/foot.css?v=1.5.5.7_102001" />
<script src="/Public/Home/yipaisend/jquery.min.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipaisend/jquery.lib.min.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipaisend/common.min.js?v=1.5.5.7_102001"></script>
<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico?v=1.5.5.7_102001">
<link rel="stylesheet" href="/Public/Home/yipaisend/nav-head.css?v=1.5.5.7_102001"/>
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
</head>
<body>
<link rel="stylesheet" href="/Public/Home/yipaisend/basicInfo.css?v=1.5.5.7_102001"/>

<div class="container">
    <h1>上“一拍”，重新定义你的价值</h1>
    <h2>
        简单回答几个问题，完成
        <span>
            报名
            <span></h2>

            <form id="form" method="post" action='<?php echo U("/Home/YiPai/dosend");?>'>
                <div class="user">
                    <label for="userName">称呼</label>
                    <div class="s-clearfix">
                        <div class = "input-wrapper userName-wrapper">
                            <input type="text" data-tip-title="称呼" data-tip-content="请填写你的真实姓名。当你接受HR的邀约前，真实姓名对他们不可见。" name="userName" id="userName" placeholder="真实姓名" class="tip-show" value=""/>
                            <div class="error-tip">请填写</div>
                        </div>
                        <div class="input-wrapper identify-input-wrapper">
                            <div class = "select-wrapper identify-select-wrapper">

                                <!-- <div class="tip-show" data-tip-title="称呼" data-tip-content="请填写你的真实姓名。当Hr在dating park中浏览候选人时根据你的姓名显示的X先生/女士。当你接受Hr的邀约后，Hr就可以看到你的真实姓名了。">
                                -->
                                <span id="selectIdentity" class="input select-title select-click select-wrapper-default identity-input tip-show" data-tip-title="称呼" data-tip-content="请填写你的真实姓名。当你接受HR的邀约前，真实姓名对他们不可见。">女士/先生</span> <i class="select-triangle select-click tip-show" data-tip-title="称呼" data-tip-content="请请填写你的真实姓名。当你接受HR的邀约前，真实姓名对他们不可见。"></i>
                                <!-- </div>
                                -->
                                <input type="hidden" class="select-input" name="jobIntention" id="workIdentity" value="女士/先生">
                                <ul class="select select-list identity-select" >
                                    <li>

                                        <label>女士</label>
                                    </li>
                                    <li>
                                        <label>先生</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="error-tip">请选择</div>
                        </div>
                    </div>
                </div>
                <div class="input-wrapper">
                    <label>职业类别</label>
                    <!--<ul class="radio-wrapper col-5">
                    -->
                    <ul class="radio-wrapper col-4 tip-show" data-tip-title="职业类别" data-tip-content="一拍目前只专注于服务互联网技术、产品、设计、运营高端候选人。如果你的职业不属于以上类别请斟酌是否报名。">
                        <li>
                            <label  for="field1">技术</label>
                            <input  type="radio" name="field" id="field1" value="1"/>
                        </li>
                        <li>
                            <label  for="field2">产品</label>
                            <input  type="radio" name="field" id="field2" value="2"/>
                        </li>
                        <li>
                            <label  for="field3">设计</label>
                            <input  type="radio" name="field" id="field3" value="3"/>
                        </li>
                        <li class="last">
                            <label  for="field4">运营</label>
                            <input  type="radio" name="field" id="field4" value="4"/>
                        </li>
                        <!--<li class="last">
                        -->
                        <!---->
                        <!--<label id="moreField">其他</label>
                    -->
                    <!---->
                    <!--<i class="select-triangle"></i>
                -->
                <!--<ul class="sub-wrapper">
                -->
                <!--<li>
                <label  for="field5">市场</label>
                <input  type="radio" name="field" id="field5" value="5"/>
            </li>
            -->
            <!--<li>
            <label  for="field6">销售</label>
            <input  type="radio" name="field" id="field6" value="6"/>
        </li>
        -->
        <!--<li>
        <label  for="field7">职能</label>
        <input  type="radio" name="field" id="field7" value="7"/>
    </li>
    -->
    <!--</ul>
    -->
    <!--</li>--></ul>
<div class="error-tip"></div>
</div>
<div class="input-wrapper">
<label for="workYear">工作经验</label>

<div class="select-wrapper ">
    <span id="selectYear" data-tip-title="工作经验" data-tip-content="一拍目前专注于服务工作经验3年以上的互联网从业人员。如果你的工作经验少于3年请斟酌是否报名。" class="input select-title select-click select-wrapper-default tip-show">1年</span> <i class="select-triangle select-click tip-show" data-tip-title="工作经验" data-tip-content="一拍目前专注于服务工作经验3年以上的互联网从业人员。如果你的工作经验少于3年请斟酌是否报名。"></i>
    <input type="hidden" class="select-input" name="workYear" id="workYear" value="  "/>
    <ul class="select select-list">
        <li>
            <label>1年</label>
        </li>
        <li>
            <label>2年</label>
        </li>
        <li>
            <label>3年</label>
        </li>
        <li>
            <label>4年</label>
        </li>
        <li>
            <label>5年</label>
        </li>
        <li>
            <label>6年</label>
        </li>
        <li>
            <label>7年</label>
        </li>
        <li>
            <label>8年</label>
        </li>
        <li>
            <label>9年</label>
        </li>
        <li>
            <label>10年</label>
        </li>
        <li>
            <label>10年以上</label>
        </li>
    </ul>
</div>
<div class="error-tip"></div>
</div>
<div class="contact-parent s-clearfix">
<div class="input-wrapper contact-wrapper">
    <label for="phoneNumber">
        手机号码
        <span></span>
    </label>
    <input type="text" data-tip-title="手机号码&邮箱地址" data-tip-content="电话和邮件是我们的顾问和HR与你联系的重要途径，请准确填写。你的联系方式只有当你接受HR的邀约后才对他们可见，否则会一直隐藏。" name="phoneNumber" id="phoneNumber" class="tip-show" value=""/>
    <div class="error-tip"></div>
</div
                >
<div class="input-wrapper contact-wrapper">
    <label for="email">
        邮箱地址
        <span></span>
    </label>
    <input type="text" data-tip-title="手机号码&邮箱地址" data-tip-content="电话和邮件是我们的顾问和HR与你联系的重要途径，请准确填写。你的联系方式只有当你接受HR的邀约后才对他们可见，否则会一直隐藏。" class="inputMailList tip-show" name="email" id="email" value="" autocomplete="off"/>
    <div class="error-tip"></div>
</div>
</div>

<div class="input-wrapper">
<label for="expectPosition">期望职位</label>
<input data-tip-title="期望职位/月薪/地点/规模" data-tip-content="你的期望会显示给Hr，他们会根据你的期望向你发送邀请。" class="tip-show" type="text" name="expectPosition" id="expectPosition" 
                 value="php开发工程师" autocomplete="off"/>
<div class="error-tip"></div>
</div>
<div class="input-wrapper">
<label>期望月薪</label>
<ul class="radio-wrapper col-4 tip-show" data-tip-title="期望职位/月薪/地点/规模" data-tip-content="你的期望会显示给HR，他们会根据你的期望向你发送邀请。">
    <li>
        <label  for="salary1">15K-25K</label>
        <input  type="radio" name="expectSalary" id="salary1" value="15K-25K"/>
    </li>
    <li>
        <label  for="salary2">25K-35K</label>
        <input  type="radio" name="expectSalary" id="salary2" value="25K-35K"/>
    </li>
    <li>
        <label  for="salary3">35K-50K</label>
        <input  type="radio" name="expectSalary" id="salary3" value="35K-50K"/>
    </li>
    <li class="last">
        <label  for="salary4">50K以上</label>
        <input  type="radio" name="expectSalary" id="salary4" value="50K以上"/>
    </li>
</ul>
<div class="error-tip"></div>
</div>
<div class="input-wrapper checkbox">
<label>
    期望工作地点
    <span>（可多选）</span>
</label>
<ul class="checkbox-wrapper tip-show" data-tip-title="期望职位/月薪/地点/规模" data-tip-content="你的期望会显示给HR，他们会根据你的期望向你发送邀请。">
    <li>
        <label  class="active"  for="city1">北京</label>
        <input  checked  type="checkbox" name="expectCity" id="city1" value="北京" />
    </li>
    <li>
        <label  for="city2">上海</label>
        <input  type="checkbox" name="expectCity" id="city2" value="上海" />
    </li>
    <li>
        <label  for="city3">广州</label>
        <input  type="checkbox" name="expectCity" id="city3" value="广州" />
    </li>
    <li>
        <label  for="city4">深圳</label>
        <input  type="checkbox" name="expectCity" id="city4" value="深圳" />
    </li>
    <li class="last">
        <label  for="city5">杭州</label>
        <input  type="checkbox" name="expectCity"
                        id="city5" value="杭州" />
    </li>
</ul>
<div class="error-tip"></div>
</div>
<div class="input-wrapper checkbox expect">
<label>
    期望的企业规模
    <span>（可多选）</span>
</label>
<ul class="checkbox-wrapper comsize-checkbox-wrapper tip-show" data-tip-title="期望职位/月薪/地点/规模" data-tip-content="你的期望会显示给HR，他们会根据你的期望向你发送邀请。">
    <li>
        <label  for="com-size1">天使轮融资公司</label>
        <input  type="checkbox" name="componySize" id="com-size1" value="天使论融资公司" />
    </li>
    <li>
        <label  for="com-size2">A轮融资公司</label>
        <input  type="checkbox" name="componySize" id="com-size2" value="A轮融资公司" />
    </li>

    <li>
        <label  for="com-size3">B轮融资公司</label>
        <input  type="checkbox" name="componySize" id="com-size3" value="B轮融资公司" />
    </li>
    <li>
        <label  for="com-size4">大型公司，人数大于500人</label>
        <input  type="checkbox" name="componySize" id="com-size4" value="大型公司，人数大于500人" />
    </li>
    <!--   <li class="last">
    <label  for="city5">杭州</label>
    <input  type="checkbox" name="componySize"
                        id="city5" value="杭州" />
</li>
-->
</ul>
</div>

<div class="step">
<label>希望屏蔽的企业</label>

<div class="step-details tip-show" data-tip-title="屏蔽企业" data-tip-content="担心某家企业HR会在一拍看到你？输入这家企业的邮箱后缀即可屏蔽他们。">
<p>
    对这些邮箱后缀的企业不可见：
    <span class="add">添加</span>
</p>
<p id="addBox" class="hide" style="display: none;">
    <input type="text" name="unexpectCompany" id="unexpectCompany" value="">
    <input type="button" id="btn_ok" value="确定">
    <input type="button" id="btn_cancel" value="取消"></p>
<p class="add-tip" style="display: none;">请输入你想屏蔽企业的邮箱后缀</p>
<p class="error-tip" style="display: none;">请填写正确的邮箱地址</p>
</div>
<div class="mail-list"></div>
</div>

<!--             <div class="input-wrapper">
<label for="company">你最近的公司名称是？</label>
<input type="text" name="company" id="company" value="西安美联网络科技有限公司" autocomplete="off"/>
<div class="error-tip"></div>
</div>
-->
<div class="input-wrapper">
<label for="jobIntention">你现在的求职意向？</label>
<div class="select-wrapper">
<span id="selectIntention" class="input select-title select-click select-wrapper-default">请选择你的求职意向</span>
<i class="select-triangle select-click"></i>
<input type="hidden" class="select-input" name="jobIntention" id="jobIntention" value=""/>
<ul class="select select-list">
<li>
    <label>暂不考虑任何新机会</label>
</li>
<li>
    <label>看看自己的行情价</label>
</li>
<li>
    <label>在职，近期会考虑新机会</label>
</li>
<li>
    <label>已离职，可以立刻上专场</label>
</li>
</ul>
</div>
<div class="error-tip"></div>
</div>

<!-- <div class="input-wrapper">
<label>什么时间方便联系你呢？</label>
<ul class="radio-wrapper col-4 row-taller">
<li>
<label class="line-two " for="time1">
工作日
<br />
(10:00-18:00)
</label>
<input  type="radio" name="contactTime" id="time1" value="1"/>
</li>
<li>
<label class="line-two " for="time2">
工作日晚上
<br />
(18:00-21:00)
</label>
<input  type="radio" name="contactTime" id="time2" value="2"/>
</li>
<li>
<label  for="time3">节假日</label>
<input  type="radio" name="contactTime" id="time3" value="3"/>
</li>
<li class="last">
<label  for="time4">不限</label>
<input  type="radio" name="contactTime" id="time4" value="4"/>
</li>
</ul>
<div class="error-tip"></div>
</div>
-->
<!-- <div class="button-wrapper">
<input id="submit" type="submit" value="完成报名"/>
<a href="javascript:history.go(-1);" class="back">容我再想想</a>
</div>
-->
<div class="button-wrapper">
<input id="submit" type="submit" value="完成报名"/>
</div>
</form>
<div class="m-tip" style="display:none;">
<div class="light_bulb"></div>
<div class="tip-content">
<h3>称呼</h3>
<p>
请填写你的真实姓名。当Hr在dating park中浏览候选人时根据你的姓名显示的X先生/女士。当你接受Hr的邀约后，Hr就可以看到你的真实姓名了。
</p>
</div>
<div class="tip_shadow"></div>
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
<script src="/Public/Home/yipaisend/feedback.min.js"></script>
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
<script src="/Public/Home/yipaisend/artTemplate.min.js"></script>

<script defer id="_lgpassport_" data-css-site="0" data-css-popup="0" src="http://passport.lagou.com/static/js/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){
                
    }
</script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/tongji.js?v=1.5.5.7_102001"></script>
<script type="text/javascript" src="http://www.lagou.com/js/libs/analytics.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipaisend/jquery.mailAutoComplete.js?v=1.5.5.7_102001"></script>
<script src="/Public/Home/yipaisend/basicInfo.js?v=1.5.5.7_102001"></script>
</body>
</html>