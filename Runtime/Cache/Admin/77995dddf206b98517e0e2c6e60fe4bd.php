<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>运营管理平台 - 拉勾网</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- 必须的css -->
		<link href="/Public/Assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Public/Assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/Assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/Assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/Assets/css/ace-fonts.css" />
		<link rel="stylesheet" href="/Public/Assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="/Public/Assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/Assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="/Public/Assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/Assets/css/lagou.admin.css" />
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/Assets/css/ace-ie.min.css" />
		<![endif]-->
        <link rel="stylesheet" href="/Public/Assets/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="/Public/Assets/css/datepicker.css" />
        <link rel="stylesheet" href="/Public/Assets/css/lagou.global.css" />
		<!-- /必须的css -->
		
		
		<script src="/Public/Assets/js/ace-extra.min.js"></script>
	</head>

	<body>
		<!-- 头部 -->
		<div class="navbar" id="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="brand">
				<small>
					<i class="icon-comments"></i>
					拉勾网 - 运营管理平台
				</small>
			</a><!--/.brand-->
			<a href="/" class="brand" target="_blank">
				<small>
					<i class="icon-comments"></i>
					拉勾网 - 前台首页
				</small>
			</a>
			<ul class="nav ace-nav pull-right">

				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<!-- <img class="nav-user-photo" src="" alt="<?php echo session('admin.username');?>" /> -->
						<span class="user-info" style="width:100px;text-align:center">
							<small>欢迎回来</small>
							<?php echo session('admin.username');?>
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">

						<li>
							<a href="javascript:;" onclick="$.lagou.formShow('<?php echo U('Admin/Index/updatepwd');?>');">
								<i class="icon-lock"></i>
								修改密码
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo U('Login/logout');?>">
								<i class="icon-off"></i>
								退出
							</a>
						</li>
					</ul>
				</li>
			</ul><!--/.ace-nav-->
		</div><!--/.container-fluid-->
	</div><!--/.navbar-inner-->
</div>
		<!-- /头部 -->

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<!-- 左侧菜单 -->
			
	<div class="sidebar" id="sidebar">
	<ul class="nav nav-list">
		<li <?php if(type == 'index'): ?>class="active open"<?php endif; ?>>
			<a href="<?php echo U('admin/index/index');?>">
				<i class="icon-home"></i>
				<span class="menu-text"> 控制台 </span>
			</a>
		</li>

		<li <?php if(type == 'user'): ?>class="active open"<?php endif; ?>>
			<a href="javascript:;" class="dropdown-toggle">
				<i class="icon-group"></i>
				<span class="menu-text">用户管理</span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
				<a href=<?php echo U('Admin/User/index');?>>
						<i class="icon-double-angle-right"></i>
						会员列表
					</a>
				</li>
			</ul>
		</li>

		<li <?php if(type == 'company'): ?>class="active open"<?php endif; ?>>
			<a href="javascript:;" class="dropdown-toggle">
				<i class="icon-envelope-alt"></i>
				<span class="menu-text">公司信息管理</span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li <?php if([ac] == 'xxx'): ?>class="active open"<?php endif; ?>>
					<a href="<?php echo U('Admin/Company/index');?>">
						<i class="icon-double-angle-right"></i>
						公司信息列表
					</a>
				</li>
				<li <?php if([ac] == 'xxx'): ?>class="active open"<?php endif; ?>>
					<a href="<?php echo U('Admin/Company/apply');?>">
						<i class="icon-double-angle-right"></i>
						申请认证公司列表
					</a>
				</li>
			</ul>
		</li>

		<li <?php if(type == 'type'): ?>class="active open"<?php endif; ?>>
			<a href="javascript:;" class="dropdown-toggle">
				<i class="icon-film"></i>
				<span class="menu-text">职位分类管理</span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li <?php if([ac] == 'xxx'): ?>class="active open"<?php endif; ?>>
					<a href="<?php echo U('Admin/Cate/index');?>">
						<i class="icon-double-angle-right"></i>
						全部分类列表
					</a>
				</li>
			</ul>
		</li>

		<li <?php if(type == 'link'): ?>class="active open"<?php endif; ?>>
			<a href="javascript:;" class="dropdown-toggle">
				<i class="icon-heart"></i>
				<span class="menu-text">友情连接管理</span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li <?php if([ac] == 'index'): ?>class="active open"<?php endif; ?>>
					<a href="<?php echo U('Admin/Link/index');?>">
						<i class="icon-double-angle-right"></i>
						友情链接列表
					</a>
				</li>
			</ul>
		</li>

		<li <?php if(type == 'manager'): ?>class="active open"<?php endif; ?>>
			<a href="javascript:;" class="dropdown-toggle">
				<i class="icon-legal"></i>
				<span class="menu-text">管理员管理</span>
				<b class="arrow icon-angle-down"></b>
			</a>
			<ul class="submenu">
				<li>
				<a href=<?php echo U('Admin/Manager/index');?>>
						<i class="icon-double-angle-right"></i>
						管理员列表
					</a>
				</li>
			</ul>
		</li>

	</ul>

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
	</div>

	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>

			<!-- /左侧菜单 -->

			<div class="main-content">
				<!-- 面包屑导航 -->
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo U('index/index');?>">首页</a>
							<span class="divider">
							<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						
<li class="active">职位分类列表</li>

					</ul>
				</div>
				<!-- /面包屑导航 -->

				<div class="page-content">
					
<div class="row-fluid">
	<div class="span6">
		<div id="nestable" class="dd">
			<ol class="dd-list">
				<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dd-item" data-id="<?php echo ($value["id"]); ?>">
					<div class="dd-handle">
						<?php echo ($vo["name"]); ?>

						<!-- 顶级分类更改 -->
						<div class="pull-right action-buttons">
							<a href="javascript:$.lagou.formShow('<?php echo U('Admin/Cate/edit', array('id'=>$vo['id'],'pid'=>$vo['pid']));?>');" class="blue">
								<i class="icon-pencil bigger-130"></i>
							</a>
						</div>
					</div>

					<ol class="dd-list">
						<?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li class="dd-item" data-id="<?php echo ($vv["id"]); ?>">
							<div class="dd-handle">
								<?php echo ($vv["name"]); ?>
				
								<!-- 二级分类更改 -->
								<div class="pull-right action-buttons">
									<a href="javascript:$.lagou.formShow('<?php echo U('Admin/Cate/edit', array('id'=>$vv['id'],'pid'=>$vv['pid']));?>');" class="blue">
										<i class="icon-pencil bigger-130"></i>
									</a>
								</div>
							</div>
							<ol class="dd-list">
								<?php if(is_array($vv["reson"])): $i = 0; $__LIST__ = $vv["reson"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li class="dd-item" data-id="<?php echo ($v["id"]); ?>">
									<div class="dd-handle">
										<?php echo ($vos["name"]); ?>

									<!-- 三级分类删除 -->
									<?php
 if(!in_array($user['id'], $info)) : ?>
										<div class="pull-right action-buttons">
											<a href="javascript:$.lagou.formShow('<?php echo U('Admin/Cate/delete', array('id'=>$vos['id'],'pid'=>$vos['pid']));?>');" class="blue">
												<i class="icon-remove bigger-130"></i>
											</a>
										</div>
									<?php endif ?>
										<!-- 三级分类更改 -->
										<div class="pull-right action-buttons">
											<a href="javascript:$.lagou.formShow('<?php echo U('Admin/Cate/edit', array('id'=>$vos['id'],'pid'=>$vos['pid']));?>');" class="blue">
												<i class="icon-pencil bigger-130"></i>
											</a>
										</div>
									
									</div>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ol>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ol>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ol>
		</div>
	</div>
	<div class="span1">
		<a class="btn btn-app btn-success" href="javascript:$.lagou.formShow('<?php echo U('Admin/Cate/add');?>');">
			<i class="icon-refresh bigger-230"></i>添加分类
		</a>
	</div>
</div>

				</div><!--/.page-content-->

				<!-- 右侧悬浮的设置按钮,去掉好像会引起js报错 -->
				<div class="ace-settings-container hide" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div>
				<!-- /右侧悬浮的设置按钮,去掉好像会引起js报错 -->
			</div>
		</div>

		<!-- 回到顶部 -->
		<a href="###" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
		<!-- /回到顶部 -->

		<!-- 操作后提示框 -->
		<div id="lg-alert" class="hide" style="margin-bottom:-1.5em;"></div>
		<!--modal表单弹出框-->
		<form id="lg-form" class="modal fade hide form-horizontal" method="post" tabindex="-1" enctype="multipart/form-data" onsubmit="return false;"></form>

		<!-- 基础js部分 -->
		<script src='/Public/Assets/js/jquery-1.10.2.min.js'></script>
		<script src='/Public/Assets/js/jquery.mobile.custom.min.js'></script>
		
		<script src="/Public/Assets/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="/Public/Assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/Assets/js/bootstrap.min.js"></script>
		<script src="/Public/Assets/js/ace-elements.min.js"></script>
		<script src="/Public/Assets/js/ace.min.js"></script>
		
		<script src="/Public/Assets/js/jquery.dataTables.min.js"></script>
		<script src="/Public/Assets/js/jquery.dataTables.bootstrap.js"></script>
		<script src="/Public/Assets/lagou/lagou.global.js"></script>
		<script src="/Public/Assets/js/jquery.inputlimiter.1.3.1.min.js"></script>

		<!-- /基础js部分 -->
		<script type="text/javascript">
		jQuery(function($){
			try{
				ace.settings.navbar_fixed(true);
				ace.settings.sidebar_fixed(true);
				ace.settings.breadcrumbs_fixed(true);
			}catch(e){}
			
			$('[data-rel=tooltip]').tooltip();
			$('[data-rel=popover]').popover({html:true});

		});	
		</script>
		

		
		
	<script src="/Public/Assets/js/jquery.dataTables.min.js"></script>
	<script src="/Public/Assets/js/jquery.dataTables.bootstrap.js"></script>
	<script src="/Public/Assets/js/jquery.nestable.min.js"></script>
	<script type="text/javascript">
			jQuery(function($) {

				$('.dd').nestable();
			
				$('.dd-handle a').on('mousedown', function(e){
					e.stopPropagation();
				});


				$.extend({

					action : function(url, obj)
					{
						var obj = $(obj).parents('form');

						$.ajax({
							url : url,
							type : 'post',
							data : obj.serialize(),
							success : function(res)
							{
								$.lagou.alert(res.msg, res.code, 2);
								$.lagou.formHide();
								location.reload();
							}
						});
					}
				});
			})
		</script>

	</body>
</html>