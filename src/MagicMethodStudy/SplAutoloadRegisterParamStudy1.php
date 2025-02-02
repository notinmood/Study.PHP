<?php
/**
 * @file   : SplAutoloadRegisterParamStudy1.php
 * @time   : 12:39
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * spl_autoload_register的参数研究
 * 1、传递匿名函数,在匿名函数内进行文件加载
 */

use MagicMethodStudy\AutoLoadStudy2_entity;

spl_autoload_register(function ($class) {
    echo "在spl_autoload_register内执行。" . PHP_EOL;
    echo("目标类的名称为：{$class}" . PHP_EOL);
    require "./AutoLoadStudy2_entity.php";
});

$temp = new AutoLoadStudy2_entity();