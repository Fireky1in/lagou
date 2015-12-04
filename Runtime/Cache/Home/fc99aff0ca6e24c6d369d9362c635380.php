<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>找工作-互联网招聘求职网-拉勾网</title>
        <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">
        <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招"
        name="keywords">
        <!-- <div class="web_root" style="display:none">http://www.lagou.com</div> -->
        <script src="/Public/HomeStyle/js/analytics.js" async=""></script>
        <link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
        <link href="/Public/css3/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/Public/HomeStyle/css/style_002.css">
    </head>
    
    <body>
        <div id="previewWrapper" style="border:none;">
            <div class="content_l">
                <dl class="job_detail">
                    <dt>
                        <h1 title="">
                            <em></em>
                            <div>
                                <?php echo ($result["name"]); ?>招聘
                            </div>
                            <?php echo ($data["name"]); ?>
                        </h1>
                    </dt>
                    <dd class="job_request">
                        <span class="red"><?php echo ($data["salary_low"]); ?>k-<?php echo ($data["salary_high"]); ?>k</span>
                        <span><?php echo ($data["city"]); ?></span>
                        <span>经验<?php echo ($data["work_year"]); ?></span>
                        <span>学历<?php echo ($data["edu"]); ?></span>
                        <span><?php echo ($data["nature"]); ?></span>
                        <br>
                        职位诱惑 : <?php echo ($data["welfare"]); ?>
                        <div>
                            发布时间：<?php echo ($data["modify_time"]); ?>
                        </div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">
                            职位描述
                        </h3>
                        <p>
                            <?php echo ($data["desc"]); ?>
                        </p>
                    </dd>
                </dl>
            </div>
            <!-- end .content_l -->
        </div>
        <!-- end #previewWrapper -->
        <script type="text/javascript" src="/Public/HomeStyle/js/jquery.js"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/job_list.js"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/analytics_002.js"></script>
        <script src="/Public/HomeStyle/js/h.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/HomeStyle/js/tongji.js"></script>
    </body>
</html>