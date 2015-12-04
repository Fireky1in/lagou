<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>创始团队-招聘服务-拉勾网-最专业的互联网招聘平台</title>
        <meta content="23635710066417756375" property="qc:admins">
        <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
        <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
        <link href="/Public/css3/style.css" type="text/css" rel="stylesheet">
        <link href="/Public/css3/external.min.css" type="text/css" rel="stylesheet">
        <link href="/Public/css3/popup.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="/Public/css3/jquery.1.10.1.min.js"></script>
        <script src="/Public/css3/jquery.lib.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/css3/ajaxfileupload.js"></script>
        <!--[if lte IE 8]>
            <script type="text/javascript" src="/Public/css3/excanvas.js">
            </script>
        <![endif]-->
    </head>
    
    <body>
        <div id="body">
            <link href="/Public/css/header.css" rel="stylesheet">
<!-- 未登录用户头部 -->
<?php if (!session('?user')) :?>
<div id="lg_tbar">
    <div class="inner">
        <!-- 未登录头部 -->
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        
        <ul class="lg_tbar_r reset">
        <li>
            <a href="<?php echo U('Home/Login/topLogin');?>" target='_blank' data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
        </li>
        <li>
            <a href="<?php echo U('Home/Register/register');?>" target='_blank' class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
        </li>
        </ul>
    </div>    
</div>        
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>

<?php if($_SESSION['user']['type'] == 1) :?>
    <!-- 个人用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
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
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我要找工作</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="http://account.lagou.com/account/accountBind.html" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a>
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
        </ul>
    </div>
</div>    
<div id="lg_tnav">
    <div class="inner">

        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1>拉勾网</h1>
                <span>普通版</span>
            </a>
        </div>
        <ul class="lg_tnav_wrap reset">
            <li>
                <a href="/" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Home/Company/index');?>" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                <b class="unhandleNum" id="unhandleNum"></b>
            </li>
            <li>
                <a href="<?php echo U('Home/YiPai/index');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">一拍</a>
            </li>

        </ul>
    </div>
</div>
<?php endif ;?>
                     
<?php if($_SESSION['user']['type'] == 2) :?>
        <!-- 企业用户头部 -->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="<?php echo U('Home/companyJob/create');?>" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
        </div>
        <ul class="lg_tbar_r reset">   
            <li>
                <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a>
            </li>
            <li>
                <a href="<?php echo U('Home/ResumeSend/index');?>" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                <em class="noticeDot dn" id="noticeDot_delivery"></em>
            </li>
                <li class="user_dpdown">
                <span class="unick bl"><?php echo session('user')['username'];?></span>
                <em class="noticeDot dn" id="noticeDot_name"></em>
                <i></i>
                <ul class="reset">
                    <li>
                        <a href="<?php echo U('Home/CompanyJob/positions');?>" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我发布的职位</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/ResumeHandle/show');?>" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">我收到的简历</a>
                        <em class="noticeDot dn" id="noticeDot_invitation"></em>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/CompanyShow/index');?>" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的公司首页</a>
                    </li>

                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我要找工作</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/Resume/index');?>" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我账号设置</a>
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
        </ul>
    </div>
</div>
<div id="lg_tnav">
    <div class="inner">  
        <div class="lg_tnav_l">
            <a href="/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
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
                <a href="<?php echo U('Home/companyJob/create');?>" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
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
</div>
<?php endif ;?>   
                
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
                                展示强劲的创始团队，让求职者跟随而来吧！
                            </div>
                            <img width="668" height="56" class="c_steps" alt="第三步" src="/Public/HomeStyle/images/step3.png">
                            <form method="post" action="<?php echo U('Home/CompanyReg/step3');?>" id="memberForm" onsubmit="return $.sub(this);">
                                <div id="memberDiv">
                                    <div class="formWrapper">
                                        <div class="new_portrait">
                                            <div class="portrait_upload" id="portraitNo0">
                                                <span>
                                                    上传创始人头像
                                                </span>
                                            </div>
                                            <div class="portraitShow dn" id="portraitShow0">
                                                <img width="120" height="120" src="">
                                                <span>
                                                    更换头像
                                                </span>
                                            </div>
                                            <input type="file" value="" title="支持jpg、jpeg、gif、png格式，文件小于5M" onchange="uploadFile(this)" name="myfiles" id="myfiles0" class="myfiles" />
                                            <input type="hidden" value="" name="leaderInfos[0][image]" id="type0" />
                                            <em>
                                                尺寸：120*120px
                                                <br>
                                                大小：小于5M
                                            </em>
                                            <span style="display:none;" id="myfiles0_error" class="error">
                                            </span>
                                        </div>
                                        <h3>
                                            创始人姓名
                                        </h3>
                                        <input type="text" placeholder="请输入创始人姓名" name="leaderInfos[0][name]" id="name0"
                                        class="s_input1 valid">
                                        <h3>
                                            当前职位
                                        </h3>
                                        <input type="text" placeholder="请输入当前职位，如：创始人兼CEO" name="leaderInfos[0][position]" id="position0" class="s_input1 valid">
                                        <h3>
                                            新浪微博
                                        </h3>
                                        <input type="text" placeholder="请输入创始人新浪微博地址" name="leaderInfos[0][weibo]" id="weibo0">
                                        <h3>
                                            创始人简介
                                        </h3>
                                        <textarea id="description0" maxlength="1000" name="leaderInfos[0][desc]" placeholder="请输入该创始人的个人履历等，建议按照时间倒序分条展示"></textarea>
                                        <div class="word_count">
                                            你还可以输入
                                            <span>
                                                500
                                            </span>
                                            字
                                        </div>
                                    </div>
                                </div>
                                <a id="addMember" class="add_member" href="javascript:void(0)">
                                    <i></i>
                                    继续添加创始团队
                                </a>
                                <div class="clear"></div>
                                <input type="submit" value="保存，下一步" id="step3Submit" class="btn_big fr">
                                <a class="btn_cancel fr" href="<?php echo U('Home/CompanyReg/step7');?>">
                                    跳过
                                </a>
                            </form>
                        </dd>
                    </dl>
                </div>
                <script src="/Public/css3/step3.min.js" type="text/javascript"></script>
                <div class="clear"></div>
                <a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;">
                </a>
            </div>
            <!-- end #container -->
        </div>
        <!-- end #body -->
        <link rel="stylesheet" type="text/css" href="/Public/css2/widgets_fec497b.css">

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
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>
        <script src="/Public/css3/core.min.js" type="text/javascript"></script>
        <!-- -->
        <script type="text/javascript">
            function uploadFile(obj) {
                var obj = $(obj);
                var hid = obj.next();
                var div = obj.prev();
                var img = div.children('img');
                $.ajaxFileUpload({
                    url : '<?php echo U('Home/Public/teamUpload');?>',
                    secureuri: false,
                    fileElementId: obj.attr('id'),
                    dataType: 'eval',
                    data : {w:obj.attr('id')},
                    success: function (data)  //服务器成功响应处理函数
                    {
                        eval("var data="+data);
                        if (data.code > 0) {
                            hid.val(data.msg);
                            div.removeClass('dn');
                            data.msg = data.msg + '?' + parseInt(Math.random()*1000);
                            img.attr('src', data.msg)
                        } else {
                            alert(data.msg);
                        }
                    },
                });
            }

            jQuery(function($) {
                $.extend({
                    sub : function(fo) {
                        var fo = $(fo);
                        $.ajax({
                            url : fo.attr('action'),
                            type : 'post',
                            data : fo.serialize(),
                            success : function(data) {
                                eval("var data="+data);
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