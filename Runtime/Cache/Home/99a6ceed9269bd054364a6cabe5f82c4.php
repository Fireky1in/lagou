<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="http://combo.b.qq.com/c/=/crm/wpa/release/3.3.7/wpa/SelectPanel.js,/crm/wpa/release/3.3.7/util/css.js,/crm/wpa/release/3.3.7/util/contains.js?v=3.3.7.20150324" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css2/v.htm" charset="utf-8"></script><script src="/Public/css2/taskMgr.js" async="" charset="utf-8" type="text/javascript"></script><script src="/Public/css2/views.js" async="" charset="utf-8" type="text/javascript"></script>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="23635710066417756375">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
<meta charset="UTF-8">

<meta content="北京-公司列表-拉勾网-最专业的互联网招聘平台" name="keywords">

<meta content="北京-公司列表-拉勾网-最专业的互联网招聘平台" name="description">

<title>北京名企招聘-互联网企业招聘-拉勾网</title>

<link rel="Shortcut Icon" href="http://pstatic.lagou.com/www/static/common/static/favicon_faed927.ico">



    <!-- header/global_domain FE_base.. -->
    
    <!-- 公共样式 -->
    <!-- header样式 -->   <!-- footer样式 -->
    <!-- 页面样式 -->

    <link rel="stylesheet" type="text/css" href="/Public/css2/widgets_fec497b.css">
    <link rel="stylesheet" type="text/css" href="/Public/css2/page.css">
    <link rel="stylesheet" type="text/css" href="/Public/css2/main.css">
<script src="/Public/css2/analytics.js" async=""></script><script src="/Public/css2/a.js" async=""></script><script charset="utf-8" class="lazyload" src="/Public/css2/jquery.js"></script><script charset="utf-8" class="lazyload" src="/Public/css2/colorbox.js"></script><script charset="utf-8" class="lazyload" src="/Public/css2/stringifyJSON.js"></script><script charset="utf-8" class="lazyload" src="/Public/css2/md5.js"></script></head>
<body>
    <script type="text/javascript" src="/Public/css2/jquery-1.8.3.min.js"> </script>


        <!-- header -->
    
    <!--C端头部通栏广告位-->
    <!-- <div id="top_bannerC">
    <a class="" href="http://www.lagou.com/topic/shilipai.html" target="_blank"></a>
</div> -->


    <!--验证注册邮箱-->
    

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
                

    <!-- 数据展示类接口需要版本号 -->
    <input id="version" value="$s_version" type="hidden">

    <div id="_lgpassport_" data-css-site="0" data-css-popup="0"></div>

    <!--copy帐号系统的passport.html-->


    <!-- 顶部banner -->
    <!--[if lt IE 9]>
      <style type="text/css">.panel .panel_cont .panel_det{filter:alpha(opacity=0)}.panel .panel_cont .panel_det .go_btn{filter:alpha(opacity=0)}.panel.hover .panel_cont{filter:alpha(opacity=95)}.panel.hover .panel_cont .panel_det{filter:alpha(opacity=100)}.panel.hover .panel_cont .panel_det .go_btn{filter:alpha(opacity=100)}</style>
<![endif]-->
<div id="banner" class="company_banner">
    <div class="banner_bg"><img src="/Public/css2/Cgo8PFXC_nyAXHIwAADVkjLYjBo328.JPG" height="402" width="100%"></div>
    <div class="banner_content">
                <h3>公司大事记</h3>
        <div id="it_content" class="it_content">
            <div class="prev">上一页</div>
            <div class="next">下一页</div>
            <div class="it_list">
                                <ul style="width: 3852px;" class="panel_list">
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgqKkVY22syAKmMvAAAuOdqjRZk617.jpg" alt="美洽logo" height="142" width="142">
                            <p class="panel_b">解决企业和顾客之间连接的问题</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>美洽获得晨兴资本、IVP 500万美金A轮融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/26087.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">11/02<span class="bottom_bg "></span><span class="bottom_bg first"></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgYXBlW4oICAIyNSAAAOSbWV8G4620.jpg" alt="发网logo" height="142" width="142">
                            <p class="panel_b">超过十年的物流软件研发经验</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>“发网” 获 2 亿元融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/86077.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/30<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgYXBlTUXJ2AMuH1AAECbtbh8BQ655.jpg" alt="今日捷财logo" height="142" width="142">
                            <p class="panel_b">理财产品的抢购平台理财产品的抢购</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>今日捷财获得 A 股上市公司西藏珠峰 3000 万元投资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/26132.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/29<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUXe-AODoJAACJTn4uX-c476.jpg" alt="空间客车logo" height="142" width="142">
                            <p class="panel_b">整合高铁和飞机闲散资源</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>想要做快递2.0的“空间客车”，已获薛蛮子等近千万天使融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/51259.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/27<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgYXBlTUXHKABJUeAACE2Y5jr-g483.jpg" alt="世界邮轮网logo" height="142" width="142">
                            <p class="panel_b">非常奇妙和有情怀在线旅游公司</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>获金葵花资本A轮投资，估值超1亿美金。“中国邮轮大航海时代将来临”</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/22794.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/26<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUXSOACSHZAAEdZA13YXY141.jpg" alt="途虎养车网logo" height="142" width="142">
                            <p class="panel_b">中国最大的汽车后市场垂直平台</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>途虎养车网获5000万美元C+轮融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/36009.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/23<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFVR2oWAVrSUAABrciRhSIs299.jpg" alt="Color公寓logo" height="142" width="142">
                            <p class="panel_b">创造年轻人更好的生活</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>网上租房平台Color公寓获深圳正轩数百万天使投资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/57769.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/22<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUXWeAGV9KAAClzcqXHis599.jpg" alt="大姨吗logo" height="142" width="142">
                            <p class="panel_b">貌美妹子多，有姨妈假</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>女性健康管理App大姨吗再获1.3亿元战略投资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/41374.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/21<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUXM-ALMUkAABqRVXh2jk220.jpg" alt="罗辑思维logo" height="142" width="142">
                            <p class="panel_b">开放自由，轻松尝试</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>罗辑思维宣布完成B轮融资 估值13.2亿元</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/29795.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/20<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFVS2SeAWgf8AACUSzhxomw100.jpg" alt="拉勾网logo" height="142" width="142">
                            <p class="panel_b">帮用户找到满意的工作</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>拉勾网马德龙：和李克强总理玩自拍的二二青年</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/147.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/19<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUWCaASxOHAABpnD0-I-g402.jpg" alt="36氪logo" height="142" width="142">
                            <p class="panel_b">领先的互联网创业公司服务提供商</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>36氪完成D轮融资，蚂蚁金服领投，华泰瑞麟、经纬中国跟投</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/6800.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/16<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgqLKVYfCuKAD0KOAABd_0QUwio812.PNG" alt="真融宝logo" height="142" width="142">
                            <p class="panel_b">一站式专业化资产配置平台</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>P2P债权交易平台真融宝获红杉资本B轮投资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/30608.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/15<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgYXBlTUXOSAF2BxAABArVeLFCY330.jpg" alt="灵雀云logo" height="142" width="142">
                            <p class="panel_b">引领下一代云风潮</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>灵雀云A轮融资1000万美元 ,宽带资本领投高榕跟投</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/31395.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/14<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUWFeAEFIcAABFM_7myOo553.jpg" alt="微播易logo" height="142" width="142">
                            <p class="panel_b">领先的社会化媒体资源平台</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>微播易获3.2亿元人民币C轮融资，投资方有中国文化产业投资基金、经纬创投等</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/13639.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/13<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgYXBlW8iEGAN2PbAACMbcr33-g643.JPG" alt="学科网logo" height="142" width="142">
                            <p class="panel_b">国内最大的教育资源门户网站</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>学科网获好未来3000万美元战略融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/17511.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/12<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgqLKVYXhvSAZcm4AAA7FMZIl4g195.PNG" alt="慧科教育logo" height="142" width="142">
                            <p class="panel_b">中国在线教育二十强</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>慧科教育获文化长城2500万投资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/9497.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/10<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/Cgo8PFTUWCOAAtVjAABi1zaiaYk587.jpg" alt="黄太吉传统美食logo" height="142" width="142">
                            <p class="panel_b">一家运用互联网思维做餐饮服务公司</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>黄太吉完成1.8亿人民币B轮融资 盛景网联等领投</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/6274.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/09<span class="bottom_bg "></span></div>
                    </li>
                                        <li>
                        <div class="panel">
                            <img src="/Public/css2/CgqLKVX2fM-ATAyOAACqIuKuw-0019.jpg" alt="出来嗨APPlogo" height="142" width="142">
                            <p class="panel_b">Hi要Hi的清新脱俗</p>
                            <div class="panel_cont">
                                <div class="panel_det">
                                    <p>社交O2O“出来嗨”宣布完成千万人民币Pre-A融资</p>
                                    <div><a class="go_btn" href="http://www.lagou.com/gongsi/34631.html" target="_blank">进入公司主页</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="time">10/08<span class="bottom_bg last"></span></div>
                    </li>
                                    </ul>
            </div>
        </div>
            </div>
</div>


    <!-- 页面主体START -->
    <div id="content-container">
        <div id="company_list_container">
            <!-- 左侧 -->
            <div class="content_left">

                <!-- 依次填入左侧各个模块 -->
                <div id="positionHead">
                    <!-- 筛选 -->
                    <ul id="filterBox" class="filter-wrapper">
                <!-- 公司筛选 star-->
    <form id="companyListForm" name="companyListForm" method="get" action="<?php echo U('Home/company/seach');?>">
        <input type="hidden" id="city" name="city" value="<?php echo ($_GET['city']); ?>" />
        <input type="hidden" id="stage" name="stage" value="<?php echo ($_GET['stage']); ?>" />
        <input type="hidden" id="trade" name="trade" value="<?php echo ($_GET['trade']); ?>" />
        <input type="hidden" id="ol" name="ol" value="" />
    <div class="details" id="filterCollapse">
        <div class="has-more workcity">
                <li class="hot">
                    <span class="title">公司地点：</span>
                    <?php foreach (C('city')['hot'] as $hotVal):?>
                        <a href="javascript:void(0)" <?php if ($_GET['city'] == $hotVal) echo 'class="active"'; ?>><?php echo ($hotVal); ?></a>
                    <?php endforeach ;?>
                        <a class="btn-more" href="javascript:;">更多 <i></i></a>
                </li>
            <div class="more more-positions">
                <li class="hot">
                    <span class="title">公司地点：</span>
                        <?php foreach (C('city')['hot'] as $hotVal):?>
                            <a <?php if ($_GET['city'] == $hotVal) echo 'class="active"'; ?>href="javascript:void(0)"><?php echo ($hotVal); ?></a>
                        <?php endforeach ;?>
                </li>
                <li class="other">
                    <?php foreach (C('city')['other'] as $key=>$otherVal): ?>
                    <dl>
                        <dt><?php echo ($key); ?></dt>
                        <dd>
                            <?php foreach(C('city')['other'][$key] as $val): ?>
                            <a href="javascript:void(0)"<?php if ($_GET['city'] == $val) echo 'class="active"'; ?>><?php echo ($val); ?></a>
                            <?php endforeach ;?>
                        </dd></br>
                    </dl></br>
                    <?php endforeach; ?>
                            <!-- <a href="javascript:void(0)"><?php echo ($hotVal); ?></a> -->
                </li>
            </div>
        </div>
        <div class="company_stage">
        <li><span class="title">发展阶段：</span>
                            <?php foreach (C('company_stage') as $stageVal):?>
                            <a href="javascript:void(0)"<?php if ($_GET['stage'] == $stageVal) echo 'class="active"'; ?>><?php echo ($stageVal); ?></a>
                            <?php endforeach; ?>
        </li>
        <div class="has-more industry">
            <li class="trades" style="border-bottom:none;">
                <span class="title">行业领域：</span>
                <?php if(is_array($trades)): foreach($trades as $key=>$vo): ?><a <?php if ($_GET['trade'] == $vo['name']) echo 'class="active"'; ?>href="javascript:void(0)"><?php echo ($vo['name']); ?></a><?php endforeach; endif; ?>            
                
                <a class="btn-more" href="javascript:;">更多 <i></i></a>
            </li>
            <div class="more more-fields">
                <li class="trades_more">
                <span class="title">行业领域：</span>
                    <?php if(is_array($tradesAll)): foreach($tradesAll as $key=>$vos): ?><a <?php if ($_GET['trade'] == $vos['name']) echo 'class="active"'; ?>href="javascript:void(0)"><?php echo ($vos['name']); ?></a><?php endforeach; endif; ?>
                </li>
            </div>        
                <li class="other">
                         
                </li>
            </div>
        </div>
    
    </form>
                <!-- 公司筛选 end -->
</ul>


                    <!-- 排序 -->
                    <ul class="order" id="order">
    <li class="wrapper">
        <div class="item order">
            <span class="title">排序方式：</span>
            <a href="http://www.lagou.com/gongsi/2-0-0?sortField=0" class="active">默认排序</a>
            <a href="http://www.lagou.com/gongsi/2-0-0?sortField=1">发布职位由多至少</a>
        </div>
        <div class="interval_assess item page"><span class="icon"></span>有面试评价</div>
    </li>
</ul>


                    <!--吸顶条-->
                    <ul style="display: none;" class="order dn" id="ceilbar">
    <li class="wrapper">
        <div class="item place selectUI">
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <div class="selectUI-text text"><span>北京</span><i></i>
            <span class="active_bg"></span>
                
            </div>
        </div>
        <div class="item developStage selectUI">
                                    <div class="selectUI-text value text"><span>发展阶段不限</span><i></i>
            <span class="active_bg"></span>
            </div>
        </div>
        <div class="item industrySpace selectUI">
                                    <div class="selectUI-text value text"><span>行业领域不限</span><i></i>
            <span class="active_bg"></span>
                <ul class="industrySpace">
                                            <li><a href="http://www.lagou.com/gongsi/2-0-0" class="active">不限</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-24">移动互联网</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-25">电子商务</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-33">金融</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-27">企业服务</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-29">教育</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-45">文化娱乐</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-31">游戏</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-28">O2O</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-47">硬件</a></li>
                                                                <li><a href="http://www.lagou.com/gongsi/2-0-34">医疗健康</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-35">生活服务</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-43">广告营销</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-32">旅游</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-41">数据服务</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-26">社交网络</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-48">分类信息</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-38">信息安全</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-49">招聘</a></li>
                                            <li><a href="http://www.lagou.com/gongsi/2-0-10594">其他</a></li>
                                    </ul>
            </div>
        </div>
        <div class="item sortbar selectUI">
                                    <div class="selectUI-text value text"><span>默认排序</span><i></i>
            <span class="active_bg"></span>
                <ul class="sortCol">
                    <li><a href="http://www.lagou.com/gongsi/2-0-0?sortField=0">默认顺序</a></li>
                    <li><a href="http://www.lagou.com/gongsi/2-0-0?sortField=1">职位数量</a></li>
                </ul>
            </div>
        </div>
        <div class="interval_assess item page"><span class="icon"></span>有面试评价</div>
    </li>
</ul>
                </div>

                <!-- 分站城市 -->
                    
                <!-- 公司列表 -->
                <div id="company_list">
    <ul class="item_con_list">
    <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><li class="<?php echo ($key%2==0? 'fl':'fr'); ?>">
                    <dl class="item_cont">
                        <dt class="fl"><a href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($vo['id']); ?>" target="_blank"><img src="<?php echo ($vo['logo']); ?>" alt="公司logo" height="130" width="130"></a></dt>
                        <dd class="fr">
                            <h3><a class="item_title" href="<?php echo U('Home/CompanyShow/index');?>?cid=<?php echo ($vo['id']); ?>" target="_blank" title="<?php echo ($vo['name']); ?>"><?php echo ($vo['name']); ?></a></h3>
                            <div class="sub_title">
                                <p><a href="<?php echo U('Home/CompanyShow/lists');?>?cid=<?php echo ($vo['id']); ?>" target="_blank"><span><?php echo ($vo['sum']); ?></span>个在招职位</a></p>
                            </div>
                            <p class="details" title="<?php echo ($vo['one_desc']); ?>"><?php echo ($vo['one_desc']); ?></p>
                        </dd>
                    </dl>
                    <div class="company_state">
                        <span class="fl web" title="<?php echo ($vo['trades']); ?>"><i></i><?php echo ($vo['trade']); ?></span>
                        <span class="fr place" title="<?php echo ($vo['city']); ?>"><i></i><?php echo ($vo['city']); ?></span>
                        <span class="type" title="<?php echo C('company_stage')[$vo['stage']];?>"><i></i><?php echo C('company_stage')[$vo['stage']];?></span>
                    </div>
                </li><?php endforeach; endif; ?>
    </ul>
                <!-- 公司列表结束 -->

    <!-- 分页 -->
    <div class="Pagination"><?php echo ($pages); ?></div>
</div>

    <script type="text/javascript">
    //城市选择
    $(".hot").children('a').click(function (){
            $('#city').val($(this).html());
            $(this).addClass()
            $('#companyListForm').submit();
        });
    $(".other").children('dl').children('dd').children('a').click(function (){
            $('#city').val($(this).html());
            $('#companyListForm').submit();
        });
    //发展阶段
    $(".company_stage").children('li').children('a').click(function (){
            $('#stage').val($(this).html());
            $('#companyListForm').submit();
        });

    $(".trades").children('a').click(function (){
            $('#trade').val($(this).html());
            $('#companyListForm').submit();
        });
    
    $(".trades_more").children('a').click(function (){
            $('#trade').val($(this).html());
            $('#companyListForm').submit();
        });
    </script>


<script id="empty-list" type="text/html">
    <div class="empty_position">
        <div class="pic"></div>
        <div class="txt">
            <div>暂时没有符合该搜索条件的公司</div>
            <span>请重新修改搜索条件后再进行搜索</span>
        </div>
    </div>
</script>

            </div>

            <!-- 右侧 -->
            <!-- 依次填入右侧各个模块 -->
            <div style="display: block;" class="content_right">
                <!-- 右侧推荐公司 -->
                <div id="sideBar" class="sideBar"><ul class="item_con_list"> <li><a href="http://www.lagou.com/gongsi/87117.html" target="_blank"><img class="company_logo" src="/Public/css2/CgYXBlXASfuADyOsAAA_na14zho635.jpg" alt="联创集团信通科技logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/87117.html" target="_blank" title="联创集团信通科技">联创集团信通科技</a></h3><h4>互联天下共创未来</h4></li> <li><a href="http://www.lagou.com/gongsi/77250.html" target="_blank"><img class="company_logo" src="/Public/css2/CgYXBlWL0nyAZMepAADGpfNNlPE647.png" alt="链商logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/77250.html" target="_blank" title="链商">链商</a></h3><h4>链商致力于构建零</h4></li> <li><a href="http://www.lagou.com/gongsi/70222.html" target="_blank"><img class="company_logo" src="/Public/css2/CgYXBlXWz_CASfmSAAAYWNd5v54630.png" alt="大悦科技logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/70222.html" target="_blank" title="大悦科技">大悦科技</a></h3><h4>拥抱变化</h4></li> <li><a href="http://www.lagou.com/gongsi/75773.html" target="_blank"><img class="company_logo" src="/Public/css2/CgYXBlV38Q2AOovrAAAaPRb28EM513.png" alt="奇葩互动logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/75773.html" target="_blank" title="奇葩互动">奇葩互动</a></h3><h4>专注休闲</h4></li> <li><a href="http://www.lagou.com/gongsi/88341.html" target="_blank"><img class="company_logo" src="/Public/css2/Cgo8PFXIJQKAIFsbAABXSmyZsgw346.png" alt="礼物约logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/88341.html" target="_blank" title="礼物约">礼物约</a></h3><h4>全球首创价值约会</h4></li> <li><a href="http://www.lagou.com/gongsi/74816.html" target="_blank"><img class="company_logo" src="/Public/css2/CgYXBlVybVeAJBhyAAAZY_fHJKs511.png" alt="世纪良品logo" height="104" width="104"></a><h3><a href="http://www.lagou.com/gongsi/74816.html" target="_blank" title="世纪良品">世纪良品</a></h3><h4>电子商务服务公司</h4></li></ul></div>
            </div>
        </div>
    </div>
    <!-- 页面主体END -->

    </script><!-- footer样式 -->
<link href="/Public/css/main.css" rel="stylesheet">
<script charset="utf-8" src="/Public/css/wpa.php"></script>

            <div class="clear"></div>
            <div class="main_con_backup">
                <input type="hidden" id="resubmitToken" value="">
                <a id="backtop" title="回到顶部" rel="nofollow" style="bottom: 140px; display: none;"></a>
                <!--product feedback-->
                <!--我要反馈按钮-->
<div id="product-fk" style="bottom: 80px;">
    <div id="feedback-icon">
    <div class="fb-icon"></div>
    <span>我要反馈</span>
    <em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~<i></i></em>
    <em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em>
</div>
</div>

<div id="feedback-con" style="bottom: 80px;">
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
            <input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）">
            <span class="ensure">确定</span>
        </div>
    </form>
    <input type="hidden" id="login-email" value="">
</div>

<script>
    // 关闭
    //3s tips消失
    window.global = window.global || {};
    global.email = "";
    global.usertoken = jQuery.cookie('user_trace_token');
    global.idmd5 = "";

</script>
<script src="/Public/css/feedback.js"></script>
            </div></block>
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
<script type="text/javascript" src="/Public/css/core.js"></script>
<script type="text/javascript" src="/Public/css/analytics(1).js"></script><script src="/Public/css/h.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/css/plat_tj.js"></script>
<script type="text/javascript">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="<?php echo U('Home/Login/login');?>" id="auto_login_iframe_0" style="display:none;"></iframe></body></html>