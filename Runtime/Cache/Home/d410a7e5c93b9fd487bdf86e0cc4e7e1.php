<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="/Public/css4/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css4/taskMgr.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css4/views.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css4/v.htm" charset="utf-8"></script><script src="/Public/css4/analytics.js" async=""></script><script src="/Public/css4/a.js" async=""></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Tue, 01 Jan 1999 1:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta property="qc:admins" content="23635710066417756375">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6">

    <meta charset="UTF-8">

        <meta content="找工作,招聘网,招聘信息,互联网招聘" name="keywords">
    
        <meta content="找工作,招聘网,求职网,互联网招聘,拉勾网是互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
    
        <title>找工作-互联网招聘求职网-拉勾网</title>
    
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
    <link href="/Public/css4/header.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/css2/page.css">
    <link rel="stylesheet" type="text/css" href="/Public/css4/style.css">
    <link rel="stylesheet" type="text/css" href="/Public/css4/style_002.css">
    <link rel="stylesheet" type="text/css" href="/Public/css4/external.css">
    <link rel="stylesheet" type="text/css" href="/Public/css4/popup.css">

    <script type="text/javascript" src="/Public/css4/jquery-1.js"></script>

    <script type="text/javascript" src="/Public/css4/jquery.js"></script>

    <script type="text/javascript" src="/Public/css4/ajaxfileupload.js"></script>

    <script type="text/javascript" src="/Public/css4/timeCountDown.js"></script>

        <script type="text/javascript" src="/Public/css4/additional-methods.js"></script>
    
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015110714"></script>
    <![endif]-->

    
<script defer="defer" id="_lgpassport_" data-css-site="0" data-css-popup="0" src="/Public/css4/passport.js" onload="passportInit()"></script>

<script type="text/javascript">
    function passportInit(){

                //}else{
            noticeInit();
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

<script async="" src="/Public/css4/main.js" data-require-id="site-customer/search-result/main"></script><script charset="utf-8" class="lazyload" src="/Public/css4/lagou.js"></script><script charset="utf-8" class="lazyload" src="/Public/css4/stringifyJSON.js"></script><script charset="utf-8" class="lazyload" src="/Public/css4/md5.js"></script></head>
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
                <?php if(session('?user')):?>
                <li>
                    <a href="http://www.lagou.com/resume/myresume.html" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
                </li>
                <li>
                    <a href="http://www.lagou.com/mycenter/delivery.html" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
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
                            <a href="http://www.lagou.com/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                        </li>

                        <li>
                            <a href="http://hr.lagou.com/" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
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
        
            <!--C端头部白色导航-->
                <div id="lg_tnav">
        

        <div class="inner">
            <div class="lg_tnav_l">
                <a href="/index.php" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1>拉勾网</h1>
                </a>
                                <div class="suggestCity"><strong>北京站</strong><em id="changeCity_btn">[切换城市]</em></div>
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
        <input id="version" value="1.5.6_2015110714" type="hidden">

        <div id="container">
    
    <!-- cibase在公司列表有用到，crbase在公司主页用到，并应用到header/common.html -->
















<!-- 页面样式 -->
<link href="/Public/css4/main_002.css" rel="stylesheet">

<!-- 临时头部适应样式 宽1200-->
<style type="text/css">
    #lg_tbar{ min-width: 1200px; }
    #lg_tnav .inner { width: 1200px; }
    #container { width: 1200px; }
    #searchBar { width: 1200px; }
    #backtop { left: 50%; margin-left: 636px !important; }
    #product-fk { left: 50%; margin-left: 626px !important; }
    #feedback-con { left: 50%; margin-left: 294px !important; }
    #footer .wrapper{ width:1200px !important; }
</style>

<div id="content-container">
    <div class="search-wrapper">
    <div id="searchBar" class="search-bar">
        <div class="input-wrapper">
        <form action="<?php echo U('Home/Search/lists');?>" method='get'>
            <div class="keyword-wrapper">
                <span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span><input class="ui-autocomplete-input" id="keyword" autocomplete="off" maxlength="64" placeholder="请输入职位名称"  name='job' value="<?php echo ($k_words); ?>" type="text">
            </div>
            <input value="搜索" type="submit">
        </form>
        </div>
        <div class="tab-wrapper">
                        <a id="tab_pos" class="active" href="javascript:;">职位 ( <span><?php echo count($jobs);?></span>  ) </a>
                    </div>
    </div>
</div>    <!-- 搜索输入框模块 -->
    <div id="main_container">
        <!-- 左侧 -->
        <div class="content_left">

            <!-- 依次填入左侧各个模块 -->
            <!--当前为公司标签时，隐藏筛选条件栏-->
            <div id="positionHead" class="">
                <!-- 公司卡片 -->
            <!-- ?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?> -->
                <!-- 筛选 -->
                <ul id="filterBox" class="filter-wrapper">
        <li style="" class="li-taller brief dn" id="filterBrief">
        <span class="title">工作地点：</span>
                        <a href="?job=<?php echo ($k_words); ?>?&city=&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == ''): ?>class="active" <?php else: endif; ?>>全国</a>
                                                                       
                                                                        
    <span class="title">工作经验：</span>
                   <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['work_year'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                                                                        
                                                                        
    <span class="title">学历要求：</span>
                                <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
     <span class="title">公司阶段：</span>
                                <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['stage'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
    <span class="title">行业领域：</span>
                                    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['trade'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                                                                        
                                                                        
                                                                        
    </li>
    <div class="details" id="filterCollapse">
        <div class="has-more">
            <li class="">
            <span class="title">工作地点：</span>
                        <a href="?job=<?php echo ($k_words); ?>?&city=&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == ''): ?>class="active" <?php else: endif; ?>>全国</a>
                        
            <?php $_result=C("city")["hot"];if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($val); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == $val): ?>class="active" <?php else: endif; ?>><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            <a class="btn-more" href="javascript:;">更多 <i></i></a>
            </li>
            <div class="more more-positions">
                <li class="hot">
                    <span class="title">工作地点：</span>
                        <a href="?job=<?php echo ($k_words); ?>?&city=&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == ''): ?>class="active" <?php else: endif; ?>>全国</a>
                        
                        
                        <?php $_result=C("city")["hot"];if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($val); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == $val): ?>class="active" <?php else: endif; ?>><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<a class="btn-more" href="javascript:;">更多&ensp;<i></i></a>-->
                </li>
                <li class="other">
                    <?php foreach (C('city')['other'] as $key=>$otherVal): ?>
                    <dl>
                        <dt><?php echo ($key); ?></dt>
                        <dd>
                            <?php foreach(C('city')['other'][$key] as $val): ?>
                        <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($val); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['city'] == $val): ?>class="active" <?php else: endif; ?>><?php echo ($val); ?></a>
                            <?php endforeach ;?>
                        </dd></br>
                    </dl></br>
                    <?php endforeach; ?>

                </li>
            </div>
        </div>

        <li><span class="title">工作经验：</span>
                   <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['work_year'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                
                <?php $_result=C("works");if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($vo); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['work_year'] == $vo): ?>class="active" <?php else: endif; ?>><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </li>

        <li><span class="title">学历要求：</span>

    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=大专&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == '大专'): ?>class="active" <?php else: endif; ?>>大专</a>
    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=本科&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == '本科'): ?>class="active" <?php else: endif; ?>>本科</a>
    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=硕士&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == '硕士'): ?>class="active" <?php else: endif; ?>>硕士</a>
    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=博士&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($da['edu'] == '博士'): ?>class="active" <?php else: endif; ?>>博士</a>
                        
        </li>
        <li><span class="title">公司阶段：</span> 
                                    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['stage'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                                    <?php $_result=C('company_stage');if(is_array($_result)): $i = 0; $__LIST__ = array_slice($_result,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($i); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['stage'] == $i): ?>class="active" <?php else: endif; ?>><?php echo ($vo); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                </li>
                <div class="has-more">
            <li class="">
                <span class="title">行业领域：</span>
                    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['trade'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                    <?php if(is_array($trade)): $i = 0; $__LIST__ = array_slice($trade,1,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['trade'] == $vo['trade']): ?> class="active" <?php endif ?>><?php echo ($vo["trade"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

                <a class="btn-more" href="javascript:;">更多 <i></i></a>
            </li>
            <div class="more more-fields">
                <li class="hot">
                    <span class="title">行业领域：</span>
                    <a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($map['trade']); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['trade'] == ''): ?>class="active" <?php else: endif; ?>>不限</a>
                    <?php if(is_array($trade)): $i = 0; $__LIST__ = array_slice($trade,1,20,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=<?php echo ($da['salary_low']); ?>&nature=<?php echo ($data['nature']); ?>" <?php if($map['trade'] == $vo['trade']): ?> class="active" <?php endif ?>><?php echo ($vo["trade"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </li>
            </div>
        </div>
            </div>
</ul>
<div class="btn-collapse-wrapper">
    <a class="btn-collapse" title="点击收起筛选项" href="javascript:"></a>
</div>

                <!-- 排序 -->
                <ul class="order" id="order">
    <li class="wrapper">
        <div class="item order">
            <span class="title">排序方式：</span>
                                    <a href="javascript:;" class="active">默认</a>
                                                <a href="http://www.lagou.com/jobs/list_%E6%95%B0%E6%8D%AE%E5%88%86%E6%9E%90%E5%B8%88?px=new&amp;city=%E5%8C%97%E4%BA%AC">最新</a>
                                </div>
        <div class="item salary selectUI">
            <span class="title">月薪：</span>
                                                                        
                                                                        
                                                                        
                            <div class="selectUI-text text"><span>不限</span><i></i>
                            <ul>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=&nature=<?php echo ($data['nature']); ?>" >不限</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=2k以下&nature=<?php echo ($data['nature']); ?>" >2k以下</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=2k-5k&nature=<?php echo ($data['nature']); ?>" >2k-5k</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=5k-10k&nature=<?php echo ($data['nature']); ?>" >5k-10k</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=10k-15k&nature=<?php echo ($data['nature']); ?>" >10k-15k</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=15k-25k&nature=<?php echo ($data['nature']); ?>" >15k-25k</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=25k-50k&nature=<?php echo ($data['nature']); ?>" >25k-50k</a></li>
                                <li><a href="?job=<?php echo ($k_words); ?>?&city=<?php echo ($da['city']); ?>&work_year=<?php echo ($da['work_year']); ?>&edu=<?php echo ($da['edu']); ?>&stage=<?php echo ($map['stage']); ?>&trade=<?php echo ($vo["trade"]); ?>&salary=50k以上&nature=<?php echo ($data['nature']); ?>" >50k以上</a></li>
                            </ul>
            </div>
        </div>
        <div class="item type selectUI">
            <span class="title">工作性质：</span>
                                                                        
                                                                        
                    <div class="selectUI-text value text"><span>不限</span><i></i>
                            <ul>
                                        <li><a href="http://www.lagou.com/jobs/list_%E6%95%B0%E6%8D%AE%E5%88%86%E6%9E%90%E5%B8%88?px=default&amp;city=%E5%8C%97%E4%BA%AC">不限</a></li>
                                        <li><a href="http://www.lagou.com/jobs/list_%E6%95%B0%E6%8D%AE%E5%88%86%E6%9E%90%E5%B8%88?px=default&amp;gx=%E5%85%A8%E8%81%8C&amp;city=%E5%8C%97%E4%BA%AC">全职</a></li>
                                        <li><a href="http://www.lagou.com/jobs/list_%E6%95%B0%E6%8D%AE%E5%88%86%E6%9E%90%E5%B8%88?px=default&amp;gx=%E5%85%BC%E8%81%8C&amp;city=%E5%8C%97%E4%BA%AC">兼职</a></li>
                                        <li><a href="http://www.lagou.com/jobs/list_%E6%95%B0%E6%8D%AE%E5%88%86%E6%9E%90%E5%B8%88?px=default&amp;gx=%E5%AE%9E%E4%B9%A0&amp;city=%E5%8C%97%E4%BA%AC">实习</a></li>
                                    </ul>
            </div>
        </div>
        <div class="item page">
            <div class="prev ban">
                &lt;
            </div>
            <div class="next ">
                &gt;
            </div>
            <div class="page-number">
                <!-- 共: <span class="span totalNum"><?php echo ($jobs["sum"]); ?></span> -->
            </div>
        </div>
    </li>
</ul>

                <!--活动位-->
                            </div>

            <!-- 公司列表 -->
            <div class="company_list dn" id="company_list">
    
    <ul class="item_con_list"><div class="empty_position">
        <div class="pic"></div>
        <div class="txt">
            <div>暂时没有符合该搜索条件的公司</div>
            <span>请重新修改搜索条件后再进行搜索</span>
        </div>
    </div></ul>

    <!-- 相关搜索 -->
    
 <div style="display: block;" class="related_search dn">
        <div class="r_search_tit">相关搜索：</div>
        <ul class="r_search_con"><li class="r_search_item">数据分析</li><li class="r_search_item">数据运营</li><li class="r_search_item">数据挖掘</li><li class="r_search_item">数据</li><li class="r_search_item">数据产品经理</li><li class="r_search_item">商业数据分析</li><li class="r_search_item">分析师</li><li class="r_search_item">数据分析实习</li><li class="r_search_item">游戏数值策划</li></ul>
    </div>  <!-- 分页 -->
    <div class="item_con_pager"></div>
</div>

<script id="tpl-comp-list" type="text/html">

    {{each data as item i}}

    <li class="c_list_item"  data-index="{{i + indexOffset}}">

        <div class="cl_left">
            <a href="http://www.lagou.com/gongsi/{{item.companyId}}.html" target="_blank"><img src="http://www.lagou.com/{{item.companyLogo}}" alt="{{item.companyName}}" width="80" height="80"></a>
        </div>

        <div class="cl_r">

            <div class="cl_r_top">
                <h2><a href="http://www.lagou.com/gongsi/{{item.companyId}}.html" target="_blank">{{item.companyShortName}}</a></h2>
                <div>“{{item.companyFeatures}}”</div>
            </div>

            <div class="cl_r_bot">
                <ul class="list_c">
                    <li class="address"><span></span>{{item.city}}{{if item.district}},{{item.district}}{{/if}}</li>
                    <li class="indu"><span></span>{{item.industryField}}</li>
                    <li class="posi"><span></span>{{item.positionNum}}个在招职位</li>
                    <li class="inter"><span></span>{{item.interviewRemarkNum}}个面试评价</li>
                    <li class="c_btn"><a href="http://www.lagou.com/gongsi/{{item.companyId}}.html" target="_blank">公司主页&nbsp;<i></i></a></li>
                </ul>
            </div>
        </div>  

    </li>

    {{/each}}
</script>

<script id="empty-comp" type="text/html">
    <div class="empty_position">
        <div class="pic"></div>
        <div class="txt">
            <div>暂时没有符合该搜索条件的公司</div>
            <span>请重新修改搜索条件后再进行搜索</span>
        </div>
    </div>
</script>
            <!-- 职位列表 -->
            <div class="s_position_list " id="s_position_list">
    <!-- 分站城市 -->
    
      <!--                               <div style="display: block;" id="switchCity" class="dn">
                <p>以下是 <strong>北京</strong> 的搜索结果，您可以切换分站到<a href="javascript:void(0);" class="tabs">北京站</a></p> 
                <span class="closeText">关闭并不再提醒</span>
                <span class="closeBtn">关闭</span>
            </div> -->
                        
    <ul style="display: block;" class="item_con_list">
    <?php if(is_array($jobs)): $i = 0; $__LIST__ = $jobs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="con_list_item first_row" data-index="0" data-positionid="1214660" data-salary="10k-20k" data-company="数据堂" data-positionname="数据分析师">
        <div class="list_item_top">
            <div class="position">
                <div class="p_top">
                    <a class="position_link" href="<?php echo U('Home/JobShow/index');?>?jid=<?php echo ($vo["id"]); ?>" target="_blank" data-index="0">
                        <h2><?php echo ($vo["name"]); ?></h2>
                        <span class="add">[<?php echo ($vo["city"]); ?>]</span>
                    </a>
                    <span><?php echo (date('Y-m-d',$vo["create_time"])); ?>发布</span>
                </div>
                <div class="p_bot">
                    <span class="money"><?php echo ($vo["salary_low"]); ?>K - <?php echo ($vo["salary_high"]); ?>K</span>
                    <div class="li_b_l">
                        <!--<i></i>-->经验<?php echo ($vo["work_year"]); ?>年 / <?php echo ($vo["edu"]); ?>
                    </div>
                </div>
            </div>
            <div class="company">
                <div class="company_name">
                    <a href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($vo["company"]["id"]); ?>" target="_blank"><?php echo ($vo["company"]["short_name"]); ?></a>
                </div>
                <div class="industry">
                    <?php echo ($vo["company"]["trade"]); ?> / <?php echo C('company_stage')[$vo['company']['stage']];?>
                </div>
            </div>
            <div class="com_logo">
                <a href="http://www.lagou.com/gongsi/29643.html" target="_blank"><img src="<?php echo ($vo["company"]["logo"]); ?>" alt="<?php echo ($vo["company"]["short_name"]); ?>" height="60" width="60"></a>
            </div>
        </div>
        <div class="list_item_bot">
            <div class="li_b_l">“<?php echo ($vo["welfare"]); ?>”</div>
            
            <div class="li_b_r">
                <span><?php echo ($vo['tags'][0]); ?></span>
                <span><?php echo ($vo['tags'][1]); ?></span>
                <span><?php echo ($vo['tags'][2]); ?></span>
                <volist name='vo.tags' id='vos'><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </li>
    </ul>
    <?php echo ($isn); ?>
    
    <!-- 相关搜索 -->
<div class="Pagination"><?php echo ($pages); ?></div>
<!-- template -->

<script id="tpl-position-list" type="text/html">

    {{each data as item i}}
    <li class="con_list_item{{if i==0}} first_row{{/if}}"  data-index="{{i + indexOffset}}" data-positionId="{{item.positionId}}" data-salary="{{item.salary}}" data-company="{{item.companyName}}" data-positionName = "{{item.positionName}}">
        <div class="list_item_top">
            <div class="position">
                <div class="p_top">
                    <a class="position_link" href="http://www.lagou.com/jobs/{{item.positionId}}.html" target="_blank" data-index="{{i}}">
                        <h2>{{item.positionName}}</h2>
                        <span class="add">[{{item.city}}]</span>
                    </a>
                    <span>{{item.formatCreateTime}}</span>
                </div>
                <div class="p_bot">
                    <span class="money">{{item.salary}}</span>
                    <div class="li_b_l">
                        <!--<i></i>-->经验{{item.workYear}} / {{item.education}}
                    </div>
                </div>
            </div>
            <div class="company">
                <div class="company_name">
                    <a href="http://www.lagou.com/gongsi/{{item.companyId}}.html" target="_blank">{{item.companyName}}</a>
                </div>
                <div class="industry">
                    {{item.industryField}} / {{item.financeStage}}
                </div>
            </div>
            <div class="com_logo">
                <a href="http://www.lagou.com/gongsi/{{item.companyId}}.html" target="_blank"><img src="http://www.lagou.com/{{item.companyLogo}}" alt="{{item.companyName}}" width="60" height="60"></a>
            </div>
        </div>
        <div class="list_item_bot">
            <div class="li_b_l">“{{item.positionAdvantage}}”</div>
            
            <div class="li_b_r">
                {{each item.companyLabelList as datas i }}
                    {{if i<4}}
                        <span>{{datas}}</span>
                    {{/if}}
                {{/each}}
            </div>
        </div>
    </li>
    {{/each}}
</script>
<!-- 数据为空 template -->
<script type="text/javascript">

    </script>
<script id="empty-position" type="text/html">
    <div class="empty_position">
        <div class="pic"></div>
        <div class="txt">
            <div>暂时没有符合该搜索条件的职位</div>
            <span>请重新修改搜索条件后再进行搜索</span>
        </div>
    </div>
</script>

        </div>

        <!-- 右侧 -->
        <!-- 依次填入右侧各个模块 -->
        <div class="content_right">

            <!-- 最近浏览 -->

            <div class="history dn">

    <h2 class="title">最近浏览过</h2>
    <ul class="position_list" id="position_list">
    <!-- 最多展示5个，只要求后台返回5条数据即可，最后一条没有border -->
        <!-- <li class="p_list_item">
            <a href="" target="_blank">
                <div class="name">高级产品经理技术工程师工程</div>
                <div class="salary">15K-25K</div>
                <div class="c_name">北京拉勾技术有限公司术有限公司啊啊啊</div>
            </a>
            
        </li>
        <li class="p_list_item">
            <a href="" target="_blank">
                <div class="name">高级产品经理技术工程师</div>
                <div class="salary">15K-25K</div>
                <div class="c_name">北京拉勾网</div>
            </a>
            
        </li> -->
        
    </ul>
</div>

            <!-- 广告位  -->

            <!--qq群广告位-->
<div key="SPACE_KEY_ZHIWEISOUSUOYE_QQQUN"></div>
<!--广告位-->
<div key="SPACE_KEY_ZHIWEISOUSUOYE_GUANGGAOWEI1"><iframe style="border:0;display:block;margin:15px 0 0 0;" src="/Public/css4/htmlPage.htm" height="73px" width="210px"></iframe></div>
<!--广告位-->
<div key="SPACE_KEY_ZHIWEISOUSUOYE_GUANGGAOWEI2"></div>
<!--广告位-->
<div key="SPACE_KEY_ZHIWEISOUSUOYE_GUANGGAOWEI3"></div>
<!--JS-->
<script src="/Public/css4/main_002.js"></script>

            <!-- 待验证 广告位 -->

        </div>
    </div>

</div>

<!-- dep -->
    <!-- jQuery 请包含在build忽略模块中，因为实际页面中的header中已经引入 -->
    
    <script src="/Public/css4/jquery_002.js"></script>
    <script src="/Public/css4/template.js"></script>
    <script src="/Public/css4/esl.js"></script>
    <script src="/Public/css4/cookies.js"></script>
    <script type="text/javascript">
    require.config({
        'baseUrl': 'http://www.lagou.com',
        'urlArgs': 'v=1.5.6_2015110714',
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
    






<script>

    window.global = window.global || {};

    global.ctx = "http://www.lagou.com";
    global.isLogin = "true" == "true";
    //分站城市
    global.current_city="北京";
    global.subSite="上海";
    global.isCloseNotice = "1";
    //一拍广告是否不再显示的cookie值
    global.paiRecTip="";
    
    global.keyword = "数据分析师";
    global.positionNum = "500+";
    global.isCompanySelected = "false" == 'true';
    global.queryParam = "city=%E5%8C%97%E4%BA%AC";
    //页面筛选条件
    global.searchCondition={
        city:"北京", 
        gj:"", 
        xl:"", 
        jd:"", 
        hy:"", 
        px:""
    }
    //页面统计参数(待整理)
    global.searchTj={
        cl:false, 
        fromSearch:true, 
        labelWords:"", 
        suginput:""
    }
    require(['site-customer/search-result/main']);
</script>

    <script type="text/javascript">
    $(function(){
        //搜索列表职位点击到JD页的统计代码 vee 2015-06-19 稍后整理到统一接口
        $('.s_position_list').on('click', '.con_list_item .position a', function(e) { 
            e.preventDefault();
            var me = $(this);
            var cur_href = me.attr('href');
            var cur_index = me.attr('data-index');
            window.open(cur_href + "?source=search&i=search-" + cur_index);
        })
    })
    </script>

<!-- footer样式 -->
<link href="/Public/css4/main.css" rel="stylesheet">

            <div class="clear"></div>
            <div class="main_con_backup">
                <input id="resubmitToken" value="" type="hidden">
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
    <input id="login-email" value="513709055@qq.com" type="hidden">
    <input id="login-phone" value="" type="hidden">
    <input id="login-realUserId" value="2220719" type="hidden">
</div>

<script>
    // 关闭
    //3s tips消失
    window.global = window.global || {};
    global.email = "513709055@qq.com";
    global.usertoken = jQuery.cookie('user_trace_token');
    global.idmd5 = "2220719";

</script>
<script src="/Public/css4/feedback.js"></script>
            </div>
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

<script type="text/javascript" src="/Public/css4/core.js"></script>
<script type="text/javascript" src="/Public/css4/analytics_002.js"></script><script src="/Public/css4/h.js" type="text/javascript"></script><ul style="display: none;" tabindex="0" id="ui-id-1" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"></ul>
<script type="text/javascript" src="/Public/css4/plat_tj.js"></script>
<script type="text/javascript">
    jQuery.getScript("http://wpa.b.qq.com/cgi/wpa.php",function(){
        BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'onlineService'});
    });
</script>


<div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>