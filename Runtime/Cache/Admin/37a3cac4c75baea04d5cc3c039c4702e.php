<?php if (!defined('THINK_PATH')) exit(); if(is_array($users)): foreach($users as $key=>$info): ?><div class="modal-header no-padding">
	<div class="table-header">
		<i class="icon-lock"></i>
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		修改管理员资料
	</div>
</div>

<div class="modal-body overflow-visible">
	<div class="control-group">
		<label class="control-label" for="username">用户名</label>
		<div class="controls">
			<input type="text" required="required" name="username" value="<?php echo ($info["username"]); ?>" id="username" placeholder="用户名" maxlength="10"/>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="gid">角色</label>
		<div class="controls">
			<select name="gid" id="gid">
				<option value="1" <?php if(($info["gid"] == 1)): ?>selected<?php endif; ?> >管理员</option>
				<option value="2" <?php if(($info["gid"] == 2)): ?>selected<?php endif; ?> >编辑</option>
				<option value="3" <?php if(($info["gid"] == 3)): ?>selected<?php endif; ?> >客服 </option>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="gid">状态</label>
		<div class="controls">
			<label>
				<input type="checkbox" class="ace ace-switch" name="status" value="1"<?php  if($info['status'] == 1):?>checked="checked"<?php endif;?>>
				<span class="lbl"></span>
			</label>
		</div>
	</div>
</div>

<div class="modal-footer">
	<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" id="hidden-userid"/>
	<button data-dismiss="modal" class="btn btn-small">
		<i class="icon-remove"></i>
		取消
	</button>
	<button type="button" class="btn btn-small btn-primary" onclick="$.editManager('<?php echo U('Admin/Manager/doEdit');?>', this);">
		<i class="icon-ok"></i>修改
	</button>
</div><?php endforeach; endif; ?>

<script type="text/javascript" src="/Public/HomeStyle/js/ajaxfileupload.js"></script>
<script type="text/javascript">
	jQuery(function($){

		$.extend({
			editManager : function(url, obj)
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
			},

			/**
             * @param string 上传地址
             * @param string file表单id
             * @param string 要修改的dom节点
             */
            uploadFile : function(url, file_id, class_id) {
                var url = url;
                var file_id = file_id;
                var class_obj = $('.'+class_id);
                var user_id = $('#hidden-userid').val();
                $.ajaxFileUpload({
                    url : url,
                    fileElementId : file_id,
                    secureuri: false,
                    dataType : 'json',
                    type : 'post',
                    data : {user_id:user_id},
                    success : function(data) {
                        data.url = data.url + '?' + parseInt(Math.random()*10000);
                        class_obj.attr('src', data.url);
                    }
                })
            }
		});
	});
</script>