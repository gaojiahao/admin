<?php
return array(
	//'配置项'=>'配置值'
	// 添加数据库配置信息
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
	
	'LOG_RECORD'            =>  false,   // 默认不记录日志
	'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
	'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志
	/*'URL_ROUTER_ON'         =>  true,                           // 开启路由
    'URL_ROUTE_RULES'       =>  array(                          // 路由规则
        'index/:p\d'=>'Index/index',                            // 首页路由
        'category/:cid\d'=>'Index/category',                    // 分类路由
        'tag/:tid\d'=>'Index/tag',                              // 标签路由
        'article/cid/:cid\d/:aid\d'=>'Index/article',           // 分类-文章路由
        'article/tid/:tid\d/:aid\d'=>'Index/article',           // 标签-文章路由
        'article/sw/:search_word\S/:aid\d'=>'Index/article',    // 搜索词-文章路由
        'article/:aid\d'=>'Index/article',                      // 文章路由
        'chat'=>'Index/chat',                                   // 随言碎语路由
        'git'=>'Index/git',                                   // 开源项目路由
        ),*/
	//'TMPL_L_DELIM'=>'<{',  编译规则
	//'TMPL_R_DELIM'=>'}>',

	//'TMPL_L_DELIM'=>'<{',  编译规则
	//'TMPL_R_DELIM'=>'}>',
);
