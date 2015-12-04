<?php if (!defined('THINK_PATH')) exit();?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		修改【<?php echo ($info["name"]); ?>】分类
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="username">父类</label>
		<div class="controls">
			<select name="pid">
				<?php foreach ($cate_class as $key => $value): ?>
					<option value="<?php echo ($value["id"]); ?>" <?php if($value['id'] == $info['pid']):?>selected="selected"<?php endif;?>><?php echo ($value["rep"]); ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="name">分类名称</label>
		<div class="controls">
			<input type="text" class="text" name="name" placeholder="分类名称" value="<?php echo ($info["name"]); ?>"/>
		</div>
	</div>
</div>

<div class="modal-footer">
	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>"/>
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.action('<?php echo U('Admin/Type/doEdit');?>', this);">
		<i class="icon-ok"></i>修改
	</button>
</div>