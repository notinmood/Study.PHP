<?php
// 类未定义时，系统自动调用
function __autoload($class)
{
    /* 具体处理逻辑 */
    //echo 'NNN-'.$class.'没有被定义';// 简单的输出未定义的类名
    echo "NNN-{$class}没有被定义";// 简单的输出未定义的类名
}

$p = new HelloWorld();
