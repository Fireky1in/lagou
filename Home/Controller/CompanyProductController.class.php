<?php
//+---------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
//+---------------------------------------------------------------------
// | Team:Five Over
//+---------------------------------------------------------------------
// | Author: five over：李梦东 <513709055@qq.com>
//+---------------------------------------------------------------------
// | Date :2015.11.09
//+---------------------------------------------------------------------
/**
*@version
*
*/
namespace Home\Controller;
class CompanyProductController extends CompanyBaseController {

	public function active()
	{
		if (IS_AJAX) {
			$data = I();
			$data['company_id'] = $this->id;
			$productObj = D('Product');
			$res = $productObj->where(array('id'=>$data['id']))->find();

			if ($res) {
				$productObj->save($data);
				$result = $productObj->where(array('id'=>$data['id']))->find();
			} else {
				$resId = $productObj->add($data);
				$result = $productObj->where(array('id'=>$resId))->find();
			}
			$msg['code'] = 1;
			$msg['name'] = $result['name'];
			$msg['image'] = $result['image'];
			$msg['link'] = $result['link'];
			$msg['desc'] = $result['desc'];

			$this->ajaxReturn($msg);

		}
	}

	public function image()
	{
		$data = I('post.fid');
		$fileName = I('post.id');
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =    3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      './Company/Product/'; // 设置附件上传目录
		$upload->saveName = (string)session('user.id').'_'.$fileName;
		$upload->saveExt = 'JPEG';
		$upload->subName = "";
		$upload->replace = true;
		$upload->hash = false;
		$info = $upload->upload();

		if (!$info)
		{
			$msg['code'] = 0;
			$msg['msg'] = $upload->getError();
		} else {
			$msg['code'] = 1;
			$msg['msg'] = 'chenggong';
			$msg['url'] = '/Uploads/Company/Product/'.$info[$data]['savename'];
		}
		
		$this->ajaxReturn($msg);
	}

	public function delete()
	{
		if (IS_AJAX) {

			$data = I();
			$proObj = D('Product');

			$result = $proObj->where(array('id'=>$data['id']))->delete();

			$state['code'] = 1;
			$state['msg'] = '删除成功';
			$this->ajaxReturn($state);
		}
	}
	
}