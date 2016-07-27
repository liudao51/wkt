<?php
return array(
    "index"	=>	array(
        "name"	=>	"系统首页",
        "key"	=>	"index",
        "groups"	=>	array(
            "index"	=>	array(
                "name"	=>	"系统首页",
                "key"	=>	"index",
                "nodes"	=>	array(
                    array("name"=>"待办事务","module"=>"Admin","controller"=>"Index","action"=>"main"),
                    array("name"=>"网站数据统计","module"=>"Admin","controller"=>"Index","action"=>"statistics"),
                    array("name"=>"借款统计","module"=>"Admin","controller"=>"Statistics","action"=>"index"),
                ),
            ),
            "syslog"	=>	array(
                "name"	=>	"系统日志",
                "key"	=>	"syslog",
                "nodes"	=>	array(
                    array("name"=>"系统日志列表","module"=>"Admin","controller"=>"Log","action"=>"index"),
                ),
            ),
        ),
    ),

    "user"	=>	array(
        "name"	=>	"会员管理",
        "key"	=>	"user",
        "groups"	=>	array(
            "user"	=>	array(
                "name"	=>	"普通会员",
                "key"	=>	"user",
                "nodes"	=>	array(
                    array("name"=>"普通用户","module"=>"Admin","controller"=>"User","action"=>"index"),
                    array("name"=>"借款用户","module"=>"Admin","controller"=>"User","action"=>"borrow_index"),
                    array("name"=>"理财用户","module"=>"Admin","controller"=>"User","action"=>"invest_index"),
                    array("name"=>"警告名单","module"=>"Admin","controller"=>"User","action"=>"warn"),
                    array("name"=>"小树黑名单","module"=>"Admin","controller"=>"User","action"=>"xiaoShuBlack"),
                    array("name"=>"网贷黑名单","module"=>"Admin","controller"=>"User","action"=>"black"),
                    array("name"=>"待审核会员","module"=>"Admin","controller"=>"User","action"=>"register"),
                    array("name"=>"会员信息","module"=>"Admin","controller"=>"User","action"=>"info"),
                    array("name"=>"会员回收站","module"=>"Admin","controller"=>"User","action"=>"trash"),
                ),
            ),
            "company"	=>	array(
                "name"	=>	"企业会员",
                "key"	=>	"company",
                "nodes"	=>	array(
                    array("name"=>"企业会员","module"=>"Admin","controller"=>"User","action"=>"company_index"),
                    array("name"=>"会员黑名单","module"=>"Admin","controller"=>"User","action"=>"company_black"),
                    array("name"=>"待审核会员","module"=>"Admin","controller"=>"User","action"=>"company_register"),
                    array("name"=>"会员信息","module"=>"Admin","controller"=>"User","action"=>"company_info"),
                    array("name"=>"会员回收站","module"=>"Admin","controller"=>"User","action"=>"company_trash"),
                ),
            ),
        ),
    ),
);
?>

