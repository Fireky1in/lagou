<?php if (!defined('THINK_PATH')) exit();?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		添加管理员用户
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="username">用户名</label>
		<div class="controls">
			<input type="text" required="required" id="username" name="username" placeholder="用户名" maxlength="10"/>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="password">密码</label>
		<div class="controls">
			<input type="text" required="required" id="password" name="password" placeholder="密码" maxlength="10"/>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="gid">角色</label>
		<div class="controls">
			<select name="gid" id="gid">
				<option value="1">管理员</option>
				<option value="2">编辑</option>
				<option value="3">客服</option>
			</select>
		</div>
	</div>
</div>

<div class="modal-footer">
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.addManager('<?php echo U('Admin/Manager/insert');?>', this);">
		<i class="icon-ok"></i>确认
	</button>
</div>

<script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
<script type="text/javascript">
	jQuery(function($){

		$.extend({
			addManager : function(url, obj)
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
	});
</script>