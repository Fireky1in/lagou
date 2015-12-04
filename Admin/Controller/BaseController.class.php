<?php
// +----------------------------------------------------------------------
// | [ Believe in yourself ] [Keep on going never give up]
// +----------------------------------------------------------------------
// | Author: 青铜六：陈仁焕 <sign0318@126.com>
// +----------------------------------------------------------------------
// | Date
// +----------------------------------------------------------------------
/**
*@version
*
*/
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	

	protected $adminId = null;
	//判断是否登录
	public function __construct()
	{
		parent::__construct();

		if (!session('?admin')) {
			$this->error('请先登录', U('Admin/Login/login'));
		}
		
		$this->adminId = session('admin.id');
	}

	//获取分类,,首页导航可用
	public function getcate(){
		$cate = M('job_category');
		$map['pid'] = 0;
		$cates = $cate->where($map)->select();
		//将数据按规则合并成思维数组,包含了层级关系
		foreach ($cates as $key => $value) {
			$map['pid'] = $value['id'];
			$cates[$key]['son'] = $cate->where($map)->select();
			foreach ($cates[$key]['son'] as $k => $v) {
				$asp['pid'] = $v['id'];
				$cates[$key]['son'][$k]['reson'] = $cate->where($asp)->select();
			}
		}
		return $cates;
	}

}