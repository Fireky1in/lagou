<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <style type="text/css"></style>
        <meta content="no-siteapp" http-equiv="Cache-Control">
        <link media="handheld" rel="alternate">
        <!-- end 云适配 -->
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>开通招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
        <link href="h/images/favicon.ico" rel="Shortcut Icon">
        <link href="/Public/HomeStyle/css/style.css" type="text/css" rel="stylesheet">
         <script type="text/javascript" src="/Public/HomeStyle/js/jquery.1.10.1.min.js"></script>
        <script src="/Public/HomeStyle/js/jquery.lib.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
        <script src="/Public/HomeStyle/js/additional-methods.js" type="text/javascript"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/HomeStyle/js/excanvas.js">
            </script>
        <![endif]-->
        <script src="/Public/HomeStyle/js/ajaxCross.json" charset="UTF-8"></script>
    </head>
    
    <body>
        <div id="body">
            <link href="/Public/css3/header.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/Public/css3/style_002.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/style.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/external.css">
<link rel="stylesheet" type="text/css" href="/Public/css3/popup.css">
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
                    <!--form-->
                    <dl class="c_section c_section_service">
                        <dt>
                            <h2>
                                <em></em>
                                开通招聘服务
                            </h2>
                        </dt>
                        <dd>
                            <div class="os_step_1"></div>
                            <form class="corp_form" id="bindForm" action="<?php echo U('CompanyRegOpen/bindstep1');?>" method="post" onsubmit="return $.sub(this);">
                                <input type="hidden" value="" id="resubmitToken">
                                <h3>
                                    <em class="redstar"> * </em>
                                    联系电话
                                    <span>
                                        （请填写真实有效的电话号码，方便系统校验使用）
                                    </span>
                                </h3>
                                <input type="text" name="tel" value="<?php echo ($arr["tel"]); ?>" placeholder="请输入你的手机号码或座机号码" maxlength="49"
                                name="tel" id="tel">
                                <span id="beError_one" style="display:none;" class="error"></span>
                                <h3>
                                    <em class="redstar"> * </em>
                                    接收简历邮箱
                                    <span>
                                        （该邮箱为公司邮箱，审核通过后不可更改）
                                    </span>
                                </h3>
                                <input type="text" name="email" value="<?php echo ($arr["email"]); ?>" placeholder="请输入你的公司邮箱作为接收简历邮箱" name="email" id="email">
                                <span id="beError_two" style="display:none;" class="error"></span>
                                <input type="submit" value="下一步" id="bindSubmit">
                            </form>
                            <div class="contactus">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">常见问题：</td>
                                        </tr>
                                        <tr>
                                            <td valign="top">问：</td>
                                            <td>填写个人邮箱可以么？</td>
                                        </tr>
                                        <tr>
                                            <td valign="top">答：</td>
                                            <td>
                                                不可以。为了保证每个职位的真实性，拉勾网严格要求招聘方必须提供公司邮箱。（公司邮箱是指以你的公司网址为后缀的免费公司邮箱，例如拉勾网的公司邮箱后缀是@lagou.com）即使是初创公司也必须提供公司邮箱才允许开通招聘。
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top">问：</td>
                                            <td>公司没有公司邮箱怎么办？</td>
                                        </tr>
                                        <tr>
                                            <td valign="top">答：</td>
                                            <td>
                                                拉勾网推荐使用免费、稳定的腾讯企业邮箱（网址：
                                                <a href="http://exmail.qq.com">
                                                    http://exmail.qq.com
                                                </a>
                                                ），根据邮箱申请指南进行操作，很快就可以拥有以你的公司网址为后缀的免费公司邮箱。
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                                如有其它问题，请发送问题到
                                                <a href="mailto:vivi@lagou.com">
                                                    vivi@lagou.com
                                                </a>
                                                ，我们会尽快为你解决。
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="clear"></div>
                <input type="hidden" value="" id="resubmitToken">
                <a rel="nofollow" title="回到顶部" id="backtop"></a>
            </div>
            <!-- end #container -->
        </div>
        <script src="/Public/HomeStyle/js/core.min.js" type="text/javascript"></script>
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
                                console.log(data);
                               if (data.code > 0) {
                                    window.location.href=data.url;
                               } else {
                                    if (data.code == -3) {
                                        $('#beError_one').css('display', 'block').html(data.msg1);
                                        $('#beError_two').css('display', 'block').html(data.msg2);
                                    } else if (data.code == -1) {
                                        $('#beError_one').css('display', 'block').html(data.msg);
                                    } else if (data.code == -2) {
                                        $('#beError_two').css('display', 'block').html(data.msg);
                                    } else {
                                        // console.log(data);
                                        alert(data.msg);
                                        location.reload();
                                    }
                                   
                                    
                               }
                            }
                        })
                        return false;
                    }
                })

                $('input[name=tel]').blur(function() {
                    var tel = $(this).val();
                    var pattern=/(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}$)|(^[0-9]{3,4}\-[0-9]{7,8}\-[0-9]{3,5}$)|(^[0-9]{7,8}\-[0-9]{3,5}$)|(^\([0-9]{3,4}\)[0-9]{7,8}$)|(^\([0-9]{3,4}\)[0-9]{7,8}\-[0-9]{3,5}$)|(^0{0,1}[13|15|18|14]{2}[0-9]{9}$)/;
                    var result = pattern.test(tel);
                    if (result) {
                        $('#beError_one').css('display', 'none').html('');
                    } else {
                        $('#beError_one').css('display', 'block').html("请输入正确的手机号或座机号，座机格式如010-62555255或010-6255255-分机号，多个电话用英文逗号隔开");
                    }
                })
                $('input[name=email]').blur(function() {
                    var email = $(this).val();
                    var reg = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
                    var res = reg.test(email);
                    if (res) {
                        $('#beError_two').css('display', 'none').html('');
                    } else {
                    $('#beError_two').css('display', 'block').html('请输入有效的邮件地址，最多2个，并用英文;隔开');
                    }
                })

                $('input[name=tel]').focus(function() {
                    $('#beError_one').css('display', 'none').html('');
                })
                $('input[name=email]').focus(function() {
                    $('#beError_two').css('display', 'none').html('');
                })
            })
        </script>
    </body>
</html>