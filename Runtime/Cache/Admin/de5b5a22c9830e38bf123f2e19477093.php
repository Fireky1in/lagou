<?php if (!defined('THINK_PATH')) exit(); if(is_array($users)): foreach($users as $key=>$info): ?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		修改用户【<?php echo ($info["username"]); ?>】的资料
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="username">用户名</label>
		<div class="controls">
			<input type="text" required="required" value="<?php echo ($info["username"]); ?>" id="username" name='username' placeholder="用户名" maxlength="10"/>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="username">类型</label>
		<div class="controls">
			<select name="type">
				<option value="1" <?php if(($info["type"] == 1)): ?>selected<?php endif; ?> >个人</option>
				<option value="2" <?php if(($info["type"] == 2)): ?>selected<?php endif; ?>>企业</option>
			</select>
		</div>
	</div>	
</div>

<div class="modal-footer">
	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" id="hidden-userid"/>
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.action('<?php echo U('Admin/User/doEdit');?>', this);">
		<i class="icon-ok"></i>修改
	</button>
</div><?php endforeach; endif; ?>