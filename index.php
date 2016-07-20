<?php

/**
 * 说明：应用入口文件
 */

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    header("Content-type: text/html; charset=utf-8");
    die('PHP环境不支持，使用本系统需要 PHP > 5.3.0 版本才可以~ !');
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

// 当前目录路径
define('SITE_PATH', getcwd() . '/');

// 项目路径
define('PROJECT_PATH', SITE_PATH . 'ThinkSys/');

// 应用模块目录
define('APP_PATH', PROJECT_PATH . 'App/');

// 应用模块公共目录
define('COMMON_PATH', PROJECT_PATH . 'App/Common/');

// 模板存放路径
define('TEMPLATE_PATH', PROJECT_PATH . 'Template/');

// 应用运行缓存目录
define("RUNTIME_PATH", SITE_PATH . "#runtime/");

// 关闭目录安全文件的生成
define('BUILD_DIR_SECURE', false);

// 引入ThinkPHP入口文件
require PROJECT_PATH . 'Core/ThinkPHP.php';