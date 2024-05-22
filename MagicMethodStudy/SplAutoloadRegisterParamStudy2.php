<?php
/**
 * @file   : SplAutoloadRegisterParamStudy2.php
 * @time   : 12:39
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * spl_autoload_register的参数研究
 * 2、传递已经存在的其他函数的名称,在已经存在的其他函数内进行文件加载
 */

function myLoad($class){
    echo "在myLoad内执行。" . PHP_EOL;
    echo("目标类的名称为：{$class}" . PHP_EOL);
    require "./AutoLoadStudy2_entity.php";
}

spl_autoload_register('myLoad');

$temp = new MagicMethodStudy\AutoLoadStudy2_entity();