<?php
/**
 * @file   : 匿名函数的类型.php
 * @time   : 11:26
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$func = function ($name="zhangsan") {
    echo "hi," . $name;
};

var_dump($func);

//────────────────────────
//控制台中可以看到,是一个Closure类型的object
//object(Closure)