<?php
return array(
	//'配置项'=>'配置值'
	// 'DB_DSN' => 'mysql://root:123123@192.168.117.46:3306/lagou#utf8'
    'URL_MODEL'             =>  1, 
	'DB_TYPE'   => 'mysqli', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'lagou', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'lg_', // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DOMAIN'                =>  'localhost', //域名
	'DB_CHARSET'=> 'utf8', // 字符集

	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'SHOW_PAGE_TRACE' => false,

    'DEFAULT_FILTER'        =>  'htmlspecialchars,trim', // 默认参数过滤方法 用于I函数...
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',

    // email配置
    'email_host' => 'smtp.163.com',
    'email_port' => 25,
    'email_username' => 'fireky1in@163.com',
    'email_pwd' => 'lmd13500621753',
    'email_fromname' => '拉勾网',
    // 
    // 'email_host' => 'smtp.126.com',
    // 'email_port' => 25,
    // 'email_username' => 'sign0318@126.com',
    // 'email_pwd' => 'crhlf1314.',
    // 'email_fromname' => '拉勾网',
	//下面的配置,为了减少数据库读取写入配置文件...在模板文件中使用 {:C()}读取
    
	// 公司的规模
    'company_scale' => array(
        0 => '少于15人',
        1 => '15-50人',
        2 => '50-150人',
        3 => '150-500人',
        4 => '500-2000人',
        5 => '2000人以上',
    ),

    // 公司发展阶段
    'company_stage' => array(
        0 => '天使轮',
        1 => 'A轮',
        2 => 'B轮',
        3 => 'C轮',
        4 => 'D轮及以上',
        5 => '上市公司',
        6 => '不需要融资',
    ),
    // 企业状态
    'company_state' => array(
        -1 => '未验证',
        0 => '禁用',
        1 => '已认证',
        2 => '未认证'
    ),

    // 城市系统
    'city' => array(
        'hot'=>array('北京', '上海', '广州', '深圳', '成都', '杭州', '武汉', '南京'),
        'other'=>array(
            ABCDEF=>array(
                '北京', '长春', '成都', '重庆', '长沙', '常州', '东莞', '大连', '佛山', '福州'
            ),
            GHIJ=>array(
                '贵阳', '广州', '哈尔滨', '合肥', '海口', '杭州', '惠州', '金华', '济南', '嘉兴'
            ),
            KLMN=>array(
                '昆明', '廊坊', '宁波', '南昌', '南京', '南宁', '南通'
            ),
            OPQR=>array(
                '青岛', '泉州'
            ),
            STUV=>array(
                '上海', '石家庄', '绍兴', '沈阳', '深圳', '苏州', '天津', '太原', '台州'
            ),
            WXYZ=>array(
                '武汉', '无锡', '温州', '西安', '厦门', '烟台', '珠海', '中山', '郑州'
            ),
        ),
)
);