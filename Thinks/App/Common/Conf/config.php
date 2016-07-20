<?php
/**
 * 项目公共配置文件
 * 该文件请不要修改，如果要覆盖惯例配置的值，可在应用配置文件中设定和惯例不符的配置项
 * 配置名称大小写任意，系统会统一转换成小写
 * 所有配置参数都可以在生效前动态改变
 */
return array(
    //格式：'配置项'=>'配置值'

    /* 数据库配置信息 */
    'DB_TYPE' => 'mysql',     //数据库类型
    'DB_HOST' => 'localhost', //服务器地址
    'DB_NAME' => 'db',        //数据库名
    'DB_USER' => 'root',      //用户名
    'DB_PWD' => '123456',     //密码
    'DB_PORT' => 3306,        //端口
    'DB_PREFIX' => 'info_',   //数据库表前缀
    'DB_CHARSET' => 'utf8',   //字符集

    'URL_MODEL' => 0,       //系统默认（用来支持模块路由定义功能）
    'MODULE_ALLOW_LIST' => array('Home', 'Admin', 'User'),   //允许访问的模块列表
    'DEFAULT_MODULE' => 'Home',   //默认模块
    'ACTION_SUFFIX' => '',          //操作方法后缀
    'URL_HTML_SUFFIX' => 'html|shtml|htm', //多个伪静态后缀设置 用"|"分割 (默认：html)
    'DEFAULT_THEME' => 'default', //设置默认的模板主题
    "TMPL_TEMPLATE_SUFFIX" => '',   //设置模板后缀名（为空时，后缀名需要在实际编程中指定如：Article/index.html）
    // 'READ_DATA_MAP' => true,   //把表单中name别名，映射到数据表的真实字段名username中
    // 'URL_PARAMS_BIND' => true, //URL变量绑定到操作方法作为参数(默认：true)

    //'SECURE_CODE' => 'xxx',     //数据加密密钥
    //'COOKIE_PREFIX' => 'xxx_',  //cookie数据前缀

    'SHOW_PAGE_TRACE' => false,   //输出页面调试信息

    /* 命名空间 */
    'AUTOLOAD_NAMESPACE' => array('Libs' => COMMON_PATH . 'Libs'), //自定义新的命名空间Libs,用于存放自定义的类库

    /* 资源文件配置 */
    'EX_URL_STATIC' => 'http://static.xxx.com/',    //静态资源网址（如：css,js,html）
    'EX_URL_IMAGE' => 'http://img.xxx.com/',        //图片网址
    'EX_URL_UPLOAD' => 'http://upload.xxx.com/',    //上传文件网址
);