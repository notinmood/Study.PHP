<?php
/**
 * @file   : index.php
 * @time   : 10:03
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\PatternStudy\IOC_DI_Practice\Stage01Traditional\Foo;

require "../../../vendor/autoload.php";

/**
 * 直接调用Foo实例的方法就好,因为Foo所依赖的对象,都在Foo内部创建完成了.
 */
$foo = new Foo();
$foo->display();
