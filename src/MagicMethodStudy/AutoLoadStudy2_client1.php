<?php

//1、如果没有这段require代码,即目标类型(MagicMethodStudy\AutoLoadStudy2_entity)不存在,
//会执行spl_autoload_register或者__autoload;
// 如果这段require代码存在,(即目标类型已经存在),那么spl_autoload_register或者__autoload不会被执行
require "./AutoLoadStudy2_entity.php";

// 目标类型不存在时候，系统自动加载__autoload;
// 可以在__autoload内调用加载类型的代码逻辑.
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