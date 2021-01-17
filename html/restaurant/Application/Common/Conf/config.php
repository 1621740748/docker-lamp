<?php
return array(
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '192.168.0.102', // 服务器地址
    'DB_NAME'   => 'restaurant', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'example123', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

    //小程序APPID和APPSECRET
    'APPID'=>'wx1bbe3008f4766fe6',
    'APPSECRET'=>'1314ba3a8279950cb16d127f3692511a',

    'BASE_URL' => 'http://192.168.0.102/restaurant',

    'ADMIN_USERNAME' => 'admin',
    'ADMIN_PASSWORD' => 'admin',

    'MODULE_ALLOW_LIST'    =>    array('Home','Api'),
    'DEFAULT_MODULE'       =>    'Home',
);
