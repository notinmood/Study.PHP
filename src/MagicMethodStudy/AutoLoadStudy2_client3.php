<?php

/**
 * 如果同时存在spl_autoload_register和__autoload,那么缺省情况下__autoload得不到执行
 */

function __autoload($class)
{
    echo("在__autoload内执行\r\n");// 简单的输出未定义的类名
    echo("目标类的名称为：{$class}\r\n");
    require "./AutoLoadStudy2_entity.php";
}


spl_autoload_register(function ($class) {
    echo "在spl_autoload_register内执行。\r\n";
    echo("目标类的名称为：{$class}\r\n");
    require "./AutoLoadStudy2_entity.php";
});

$temp = new MagicMethodStudy\AutoLoadStudy2_entity();