<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0040)http://www.lagou.com/resume/preview.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=10;IE=9;IE=8;IE=7;IE=EDGE">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="alternate" media="handheld" href="http://www.lagou.com/resume/preview.html#">
<meta charset="utf-8">

<title>简历预览-我的简历-拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375">
<meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
<meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">
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
<link rel="Shortcut Icon" href="http://www.lagou.com/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/style.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/style(1).css">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/myresume.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/external.min.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/resume/popup.css">
<script src="/Public/Home/resume/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Home/resume/jquery.lib.min.js"></script>
<script src="/Public/Home/resume/ajaxfileupload.js" type="text/javascript"></script>

<script type="text/javascript" src="/Public/Home/resume/additional-methods.js"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="http://www.lagou.com/js/assets/excanvas.js?v=1.5.6_2015111118"></script>
<![endif]-->
</head>
<body>
<div id="body">

	<div class="mr_created mr_preview">
		<div class="mr_myresume_l mrcenter">
			<div id="mr_mr_head">
				<div class="mr_top_bg" id="baseinfo">
				<!-- F:\wamp\www\project\Uploads\User\image -->
					<img src="/Uploads/User/image/<?php echo ($data["image"]); ?>" alt="">
					<img src="/Public/Home/resume/tou.png" class="opa" alt="">
					<img src="/Public/Home/resume/shadow_tx.png" alt="" class="shadow">
				</div>
				<div class="mr_baseinfo">
					<i class="mr_left_bg"></i>
					<i class="mr_right_bg"></i>
					<div class="mr_p_name mr_w604 clearfixs">
						<span class="mr_name"> <?php echo ($data["name"]); ?> </span>
					</div>
					<form id="nameForm">
						<div class="mr_name_edit dn">
							<input type="text" id="mr_name" name="mr_name" class="ed_name" autocomplete="off">
							<input type="submit" class="save" value="保存">
							<a href="javascript:;" class="cancel">取消</a>
						</div>
					</form>
										<div class="mr_p_introduce mr_w604 clearfixs">
												<span class="mr_intro"> <?php echo ($data["introduction"]); ?> </span>
											</div>
										<div class="mr_p_info mr_infoed mr_w604 clearfixs">		
						<div class="info_t">
							<span class="shenfen">
										<i></i>
										<em data-id="0" title="<?php echo ($data["professional"]); ?> · <?php echo ($data["school"]); ?>"><?php echo ($data["professional"]); ?> · <?php echo ($data["school"]); ?></em>
							</span>
							<span class="base_info"><i></i><em class="s"></em><em class="x"><?php echo ($data["education"]); ?></em><em class="j" style="cursor: default;"><span class="job_span"><?php echo ($data["work_year"]); ?></span><span class="birth_span dn">年出生<em></em></span></em><em class="mr0 d"><?php echo ($data["hope_city"]); ?></em></span>
						</div>
						<div class="info_b">
							<span class="mobile"><i></i><em> <?php echo ($data["phone"]); ?> </em></span>							<span class="email"><i></i><em> <?php echo ($data["email"]); ?> </em></span>						</div>
						<div class="mr_sns dn">
						</div>
					</div>	
						
				</div>
			</div>	
			<div class="mr_content">
				<div class="mr_w604">
										<div id="workExperience">
						<div>
							<div class="mr_moudle_head clearfixs">
								<div class="mr_head_l">
									<div class="mr_title">
										<span class="mr_title_l"></span><span class="mr_title_c"> 项目经验  </span><span class="mr_title_r"></span>
									</div>
								</div>
							</div>
							<?php if(is_array($data["res_project_value"])): $i = 0; $__LIST__ = $data["res_project_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mr_moudle_content">
								<div class="list_show">
									<div class="mr_jobe_list">
										<div class="clearfixs">
											<div class="mr_content_l">
												<div class="l2">
												<h4><?php echo ($vo["name"]); ?></h4>
												<span><?php echo ($vo["job"]); ?></span>
												</div>
											</div>
										<div class="mr_content_r">
											<span><?php echo ($vo["begin_yeartime"]); ?>.<?php echo ($vo["begin_monthtime"]); ?> — <?php echo ($vo["end_yeartime"]); ?>.<?php echo ($vo["end_monthtime"]); ?></span>
										</div>							
										</div>
										<div class="mr_content_m">
											<?php echo ($vo["description"]); ?>
										</div>
									</div>	
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>					
						</div>
					</div>
										
					<div id="educationalBackground">
						<div>
							<div class="mr_moudle_head clearfixs">
								<div class="mr_head_l">
									<div class="mr_title">
										<span class="mr_title_l"></span><span class="mr_title_c">教育经历</span><span class="mr_title_r"></span>
									</div>
								</div>
								<!-- <div class="mr_head_r">
									<i></i><em>添加</em>
								</div> -->
							</div>
							<?php if(is_array($data["res_education_value"])): $i = 0; $__LIST__ = $data["res_education_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mr_moudle_content">
								<div class="clearfixs mb46 mr_jobe_list">
									<div class="mr_content_l">
										<div class="l2">
											<h4><?php echo ($vo["school"]); ?></h4>
											<span><?php echo ($vo["education"]); ?> · <?php echo ($vo["professional"]); ?></span>
										</div>
									</div>
									<div class="mr_content_r">
									开始于:<span><?php echo ($vo["begin_time"]); ?></span><br>
									结束于:<span><?php echo ($vo["end_time"]); ?></span>
								</div>							
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>						
						</div>
					</div>

					<div id="educationalBackground">
						<div>
							<div class="mr_moudle_head clearfixs">
								<div class="mr_head_l">
									<div class="mr_title">
										<span class="mr_title_l"></span><span class="mr_title_c">工作经历</span><span class="mr_title_r"></span>
									</div>
								</div>
								<!-- <div class="mr_head_r">
									<i></i><em>添加</em>
								</div> -->
							</div>
							<?php if(is_array($data["work_history_value"])): $i = 0; $__LIST__ = $data["work_history_value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mr_moudle_content">
								<div class="clearfixs mb46 mr_jobe_list">
									<div class="mr_content_l">
										<div class="l2">
											<h4><?php echo ($vo["company"]); ?></h4>
											<span><?php echo ($vo["job"]); ?></span>
										</div>
									</div>
									<div class="mr_content_r">
									开始于:<span><?php echo ($vo["begin_yeartime"]); ?>-<?php echo ($vo["begin_monthtime"]); ?></span><br>
									结束于:<span><?php echo ($vo["end_yeartime"]); ?>-<?php echo ($vo["end_monthtime"]); ?></span>
								</div>
								<div style='clear:both'></div>
								<b>工作内容：</b><?php echo ($vo["content"]); ?>							
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>						
						</div>
					</div>	
										
																				<div id="expectJob" class="dn item_container_target">
					<div>
						<div class="mr_moudle_head clearfixs mr_w604">
							<div class="mr_head_l">
								<div class="mr_title">
									<span class="mr_title_l"></span><span class="mr_title_c">期望工作</span><span class="mr_title_r"></span>
								</div>
							</div>
						</div>
						<div class="mr_moudle_content clearfixs mr_w604">
							<div class="expectjob_list dn">
								<input id="expHideId" type="hidden" value="">
									
								<div class="mr_job_info" data-id="">
									<ul class="clearfixs">
										<li class="mr_name_li"><i></i><span class="mr_job_name" title=""></span></li>
										<li class="mr_jobtype_li"><i></i><span class="mr_job_type" title=""></span></li>
										<li class="mr_city_li"><i></i><span class="mr_job_adr" title=""></span></li>
										<li class="mr_jobrange_li"><i></i><span class="mr_job_range" title=""></span></li>
									</ul>
								</div>
															</div>										
						</div>						
					</div>
				</div>
					
										
									</div>
				
				<div class="mr_self_state">
					<!-- <div class="mr_show_state">
						<span>· </span><span>我目前已离职，可快速到岗</span><span> ·</span>
					</div> -->
					   	 				<div class="form_wrap mr_self_s resume_status">
						·&nbsp;我目前正在职，正考虑换个新环境&nbsp;·				   	 				
	   	 			</div>
   	 								</div>
			</div>	
		
			<div class="mr_bottom_r" id="mr_pre_bot">
				<span>© 陈仁焕  简历更新于2015-11-11 19:26. Powered by Lagou.com</span>
			</div>
		</div>
	</div> 
<script type="text/javascript" src="/Public/Home/resume/preview.js"></script>
<script>

</script>
<!-------------------------------------弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!-- 上传简历 -->
	<div id="uploadFile" class="popup">
	    <table width="100%">
	    	<tbody><tr>
	        	<td align="center">
	                <form>
	                    <a href="javascript:void(0);" class="btn_addPic">
	                    	<span>选择上传文件</span>
	                        <input tabindex="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload" class="filePrew" type="file" onchange="file_check(this,&#39;http://www.lagou.com/nearBy/updateMyResume.json&#39;,&#39;resumeUpload&#39;)">
	                    </a>
	                </form>
	            </td>
	        </tr>
	    	<tr>
	        	<td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
	        </tr>
	        <tr>
	        	<td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
	        </tr>
	    	<tr>
	        	<td align="center"><img src="/Public/Home/resume/loading.gif" width="55" height="16" id="loadingImg" style="visibility: hidden;" alt="loading"></td>
	        </tr>
	    </tbody></table>
	</div><!--/#uploadFile-->
	
	<!-- 简历上传成功 -->
	<div id="uploadFileSuccess" class="popup">
     	<h4>简历上传成功！</h4>
         <table width="100%">
             <tbody><tr>
                 <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
             </tr>
         	<tr>
             	<td align="center"><a href="javascript:;" class="btn_s">确&nbsp;定</a></td>
             </tr>
         </tbody></table>
     </div><!--/#uploadFileSuccess-->
     
	<!-- 没有简历请上传 -->
    <div id="deliverResumesNo" class="popup">
        <table width="100%">
            <tbody><tr>
                <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
            </tr>
        	<tr>
            	<td align="center">
                    <form>
                        <a href="javascript:void(0);" class="btn_addPic">
                        	<span>选择上传文件</span>
                        	<input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload1" class="filePrew" type="file" onchange="file_check(this,&#39;http://www.lagou.com/nearBy/updateMyResume.json&#39;,&#39;resumeUpload1&#39;)">
                        </a>
                    </form>
                </td>
            </tr>
        	<tr>
            	<td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumesNo-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUpload" class="popup">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		操作说明：<br>
                		打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a class="inline btn" href="http://www.lagou.com/resume/preview.html#uploadFile" title="上传附件简历">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#fileResumeUpload-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUploadSize" class="popup">
        <table width="100%">
            <tbody><tr>
                <td>
                	<div class="f18 mb10">上传文件大小超出限制</div>
                </td>
            </tr>
            <tr>
                <td>
                	<div class="f16">
                		提示：<br>
                		单个附件不能超过10M，请重新选择附件简历！
                	</div>
                </td>
            </tr>
        	<tr>
            	<td align="center">
            		<a class="inline btn" href="http://www.lagou.com/resume/preview.html#uploadFile" title="上传附件简历">重新上传</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#deliverResumeConfirm-->
    
</div>
<!------------------------------------- end ----------------------------------------->
</div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>