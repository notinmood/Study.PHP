<?php


// 目标类型不存在时候，系统自动加载__autoload;
// 可以在__autoload内调用加载类型的代码逻辑.
function __autoload($class)
{
    echo("在__autoload内执行\r\n");// 简单的输出未定义的类名
    echo("目标类的名称为：{$class}\r\n");
    require "./AutoLoadStudy2_entity.php";
}

$temp = new MagicMethodStudy\AutoLoadStudy2_entity();