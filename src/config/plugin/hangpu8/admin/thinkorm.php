<?php
return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type' => 'mysql',
            // 服务器地址
            'hostname' => getenv('HOSTNAME'),
            // 数据库名
            'database' => getenv('DATABASE'),
            // 数据库用户名
            'username' => getenv('USERNAME'),
            // 数据库密码
            'password' => getenv('PASSWORD'),
            // 数据库连接端口
            'hostport' => getenv('HOSTPORT'),
            // 数据库连接参数
            'params' => [],
            // 数据库编码默认采用utf8
            'charset' => getenv('CHARSET'),
            // 数据库表前缀
            'prefix' => getenv('PREFIX'),
            // 断线重连
            'break_reconnect' => true,
            // 关闭SQL监听日志
            'trigger_sql' => false,
        ],
    ],
];
