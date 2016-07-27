<?php
return array(
    "Index,Statistics" => array(
        "name" => "系统首页",
        "node" => array(
            "main" => array("name" => "待办事务", "module"=>"Admin", "controller" => "Index", "action" => "main"),
            "statistics" => array("name" => "网站数据统计", "module"=>"Admin", "controller" => "Index", "action" => "statistics"),
            "manage_carry" => array("name" => "管理员提现列表", "module"=>"Admin", "controller" => "Index", "action" => "manage_carry"),
            "de_manage_carry" => array("name" => "管理员提现删除执行", "module"=>"Admin", "controller" => "Index", "action" => "de_manage_carry"),
            "index" => array("name" => "借款统计", "module"=>"Admin", "controller" => "Statistics", "action" => "index"),
        )
    ),

    "Log" => array(
        "name" => "系统日志",
        "node" => array(
            "index" => array("name" => "系统日志列表", "module"=>"Admin", "controller" => "Log", "action" => "index"),
            "foreverdelete" => array("name" => "永久删除", "module"=>"Admin", "controller" => "Log", "action" => "foreverdelete"),
        )
    ),

    "User,Option" => array(
        "name" => "会员管理",
        "node" => array(
            //普通会员
            "index" => array("name" => "普通用户", "module"=>"Admin", "controller" => "User", "action" => "index"),
            "borrow_index" => array("name" => "借款用户", "module"=>"Admin", "controller" => "User", "action" => "borrow_index"),
            "invest_index" => array("name" => "理财用户", "module"=>"Admin", "controller" => "User", "action" => "invest_index"),
            "black" => array("name" => "会员黑名单", "module"=>"Admin", "controller" => "User", "action" => "black"),
            "register" => array("name" => "待审核普通会员", "module"=>"Admin", "controller" => "User", "action" => "register"),
            "info" => array("name" => "普通会员信息", "module"=>"Admin", "controller" => "User", "action" => "info"),
            "trash" => array("name" => "普通会员回收站", "module"=>"Admin", "controller" => "User", "action" => "trash"),
        )
    ),
);
?>
