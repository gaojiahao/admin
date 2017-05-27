<?php
return array(
	//'配置项'=>'配置值'
	// 添加数据库配置信息
	//配置链接数据库
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'127.0.0.1',// 服务器地址
	'DB_NAME'=>'play',// 数据库名
	'DB_USER'=>'root',// 用户名
	'DB_PWD'=>'123456',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'video_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
	
	
	'URL_MODEL'=>2,
	'DATA_CACHE_TYPE'=>'file',//设置缓存方式为file
	'DATA_CACHE_TIME'=>'600',//缓存周期600秒
	
	'LOG_RECORD' => false,    // 关闭日志记录
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
	'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志
	//配置链接smtp邮箱设置
	/*'SHOW_PAGE_TRACE'=>true,
	'URL_ROUTER_ON'         =>  true,                           // 开启路由
    'URL_ROUTE_RULES'       =>  array(                        
       'add'=>'Book/Home/add',                                 // 随言碎语路由
       'look'=>'add',                                   // 开源项目路由
        ),*/
	);

