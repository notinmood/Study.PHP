<?php
/**
 * @file   : 匿名函数的调用.php
 * @time   : 11:22
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$func= function ($name){
    echo "hi,".$name;
};

//方式1、跟普通函数一样调用
$func("zhangsan");
//方式2、通过invoke调用
$func->__invoke("zhangsan");