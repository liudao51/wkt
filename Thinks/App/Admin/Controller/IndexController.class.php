<?php

/**
 * class：IndexController
 * mark: 后台首页控制器, 继承自 <Module_Namespace>\CommonController
 *
 */

namespace Admin\Controller;

class IndexController extends CommonController
{
    /**
     * 后台首页
     */
    public function index()
    {
        $this->display('Index/index.html');
    }

    /**
     * 后台框架顶部
     */
    public function top()
    {
        $this->display('Index/top.html');
    }

    /**
     * 后台框架左侧
     */
    public function left()
    {
        $this->display('Index/left.html');
    }

    /**
     * 后台框架左右侧中间的drag条
     */
    public function drag()
    {
        $this->display('Index/drag.html');
    }

    /**
     * 后台框架右侧
     */
    public function main()
    {
        $this->display('Index/main.html');
    }

    /**
     * 后台框架底部
     */
    public function footer()
    {
        $this->display('Index/footer.html');
    }
}