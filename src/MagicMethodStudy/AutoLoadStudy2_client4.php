<?php

/**
 * 如果同时存在spl_autoload_register和__autoload,
 * 又想让__autoload得到执行,那么就在spl_autoload_register内调用__autoload
 */

function __autoload($class)
{
    echo("在__autoload内执行\r\n");// 简单的输出未定义的类名
    echo("目标类的名称为：{$class}\r\n");
    require "./AutoLoadStudy2_entity.php";
}


spl_autoload_register(function ($class) {
    echo "在spl_autoload_register内执行。\r\n";
    __autoload($class);
});

$temp = new MagicMethodStudy\AutoLoadStudy2_entity();