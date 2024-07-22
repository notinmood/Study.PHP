<?php
/**
 * @file   : 匿名函数的类型.php
 * @time   : 11:26
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$func = static function ($name="zhangsan") {
    echo "hi," . $name;
};

//一。匿名函数的类型
var_dump($func);
//────────────────────────
//控制台中可以看到,是一个Closure类型的object
//object(Closure)
//由此我们可以看出创建一个匿名函数，实际上是创建了一个Closure类的实例对象。
//所以这个$func其实是一个伪装成函数的Closure类的对象。

//二。匿名函数的调用
//匿名函数的调用方式有两种：
//方式1、跟普通函数一样调用
$func("zhangsan");
//方式2、通过invoke调用
$func->__invoke("zhangsan");

