<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL'             =>  0,
	'SHOW_PAGE_TRACE'   => true,
	//地址不敏感大小写
	'URL_CASE_INSENSITIVE'  =>  true,
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    'SESSION_OPTIONS'       =>  array('expire'=>3600),
    
    'URL_ROUTER_ON'   => true,
    'URL_MAP_RULES'=>array(
        'index.php/index'=>'index.php/Home/index/index',
    )

);