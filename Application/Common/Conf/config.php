<?php
return array(
    'show_page_trace'=>false,
	//'配置项'=>'配置值'
    'URL_MODEL'             =>  1,
	'SHOW_PAGE_TRACE'   => true,
	//地址不敏感大小写
	'URL_CASE_INSENSITIVE'  =>  true,
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    'SESSION_OPTIONS'       =>  array('expire'=>172800),
    
    'URL_ROUTER_ON'   => true,
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),  //可访问模块
    'DEFAULT_MODULE'       =>    'Home', 
    'URL_MAP_RULES'=>array(
        'products'=>'goods/products',
        'index.php/index'=>'index.php/Home/index/index',
        'home/user/login'=>'index.php/home/user/login',
        'login'=>'admin/user/login'
    ),
);