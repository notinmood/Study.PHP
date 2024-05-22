<?php
/**
 * @file   : index.php
 * @time   : 12:30
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * optional的功能主要是避免在null对象上进行成员访问时,抛出异常的情景.
 * optional的实现,依赖于魔术方法 __Call()
 * 缺点:不能让IDE支持智能语法提示。
 */

use PHP\Study\OptionalStudy\res\Foo;

require "../vendor/autoload.php";
require "./function.php";


$foo = new Foo();

echo optional($foo->exist())->say();
echo optional($foo->null())->say();

/**
 * 如果不使用optional功能,直接使用如下语言会抛出异常
 */
// echo $foo->null()->say();
