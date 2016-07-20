<?php

/**
 * 自定义的打印数组的函数
 * @param $array 一个数组
 * @return 直接打印数组
 */
function debug_echo($array)
{
    dump($array, true, "<pre>", false);
}

