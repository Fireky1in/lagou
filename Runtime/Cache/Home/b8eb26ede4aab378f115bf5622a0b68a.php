<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>申请认证-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/HomeStyle/css/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
        <script src="/Public/HomeStyle/js/additional-methods.js" type="text/javascript"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/HomeStyle/js/excanvas.js">
            </script>
        <![endif]-->
    </head>
    
    <body>
        <div id="body">
            <link href="/Public/css3/header.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/Public/css3/style_002.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/external.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/popup.css">
<div id="lg_tbar">
         <div class="inner">

                <div class="lg_tbar_l">
                    <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                    <a href="<?php echo U("Home/CompanyRegOpen/bindstep");?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
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
        </div>

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
                                申请公司认证
                            </h2>
                        </dt>
                        <dd class="c_certify">
                            <h4>
                                公司认证已提交，请等待审核
                            </h4>
                            <div class="f16 mb20">
                                收到资料后我们将在24小时内进行人工审核，并将审核结果发送至你的邮箱， 请耐心等待O(∩_∩)O~
                            </div>
                            <div class="certify_notice">
                                <ul>
                                    <li class="lista">
                                        若通过审核
                                        <span>
                                            [ 您将在公司详情页的简称右侧查看到【认证徽章】点亮 ]
                                        </span>
                                    </li>
                                    <li class="listb">
                                        若未通过审核
                                        <span>
                                            [ 我们将以邮件的形式写清楚未通过审核的原因，您可以整理好所需资料重新提交审核 ]
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="breakdotted">
                            </div>
                            <a class="greenlink" href="<?php echo U('Home/CompanyJob/create');?>">
                                发布新职位
                            </a>
                            <a class="greenlink" href="<?php echo U('Home/Company/index');?>">
                                进入我的公司主页
                            </a>
                        </dd>
                    </dl>
                </div>
                <div class="clear">
                </div>
                <input type="hidden" value="" id="resubmitToken">
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;">
                </a>
            </div>
            <!-- end #container -->
        </div>
        <!-- end #body -->
        <link rel="stylesheet" type="text/css" href="/Public/css2/widgets_fec497b.css">
<link rel="stylesheet" type="text/css" href="/Public/css/main.css">
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

    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
        <script src="/Public/HomeStyle/js/popup.min.js" type="text/javascript"></script>
        <!-- -->
    </body>

</html>