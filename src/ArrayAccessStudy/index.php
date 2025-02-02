<?php
/**
 * @file   : index.php
 * @time   : 16:43
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * ArrayAccess（数组式访问）接口
 * 此接口提供了像访问数组成员一样访问对象属性的能力:
 * 将$target->foo这种访问方式,改变为$target["bar"]
 */

require "../../vendor/autoload.php";

use PHPStudy\ArrayAccessStudy\ArrayAndObjectAccess;

$target = new ArrayAndObjectAccess();

/**
 * 实现了 ArrayAccess的类型，其实例对象即可以使用对象的方式访问，也可以使用数组的方式访问
 */

/** @noinspection all */
$target->foo   = "my foo";
$target["bar"] = "my bar";

echo $target["foo"];
echo PHP_EOL;
/** @noinspection all */
echo $target->bar;
