<?php if (!defined('THINK_PATH')) exit();?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		创建分类
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="username">父类</label>
		<div class="controls">
			<select name="pid">
				<option value="0">顶级分类</option>
				<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><option value="<?php echo ($value["id"]); ?>">|﹎﹍<?php echo ($value["name"]); ?></option>
					<?php if(is_array($value["son"])): $i = 0; $__LIST__ = $value["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>">|﹎﹍|﹎﹍<?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</select> 
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="name">分类名称</label>
		<div class="controls">
			<input type="text" class="text" name="name" placeholder="分类名称" value=""/>
		</div>
	</div>
</div>

<div class="modal-footer">
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.action('<?php echo U('Admin/Cate/insert');?>', this);">
		<i class="icon-ok"></i>添加
	</button>
</div>