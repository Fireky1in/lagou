<?php if (!defined('THINK_PATH')) exit();?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		修改密码
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="password">新密码</label>
		<div class="controls">
			<input type="text" required="required" id="password" name="password" placeholder="新密码" maxlength="10"/>
		</div>
	</div>
</div>

<div class="modal-footer">
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.editPwd('<?php echo U('admin/user/doEditPwd');?>', this);">
		<i class="icon-ok"></i>确认
	</button>
</div>

<script type="text/javascript">
	jQuery(function($){
		$.extend({
			editPwd : function(url, obj)
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
					}
				});
			}
		});
	});
</script>