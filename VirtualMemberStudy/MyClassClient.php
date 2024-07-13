<?php
/**
 * @file   : index.php
 * @time   : 上午9:19
 * @date   : 2024/7/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require '../vendor/autoload.php';

use PHPStudy\VirtualMemberStudy\MyClass;

//以下获取实例属性和静态方法的示例
//在IDE里面，都可以有智能提示，方便开发者使用。但因为在真实的MyClass内并没有实现这两个成员，因此运行会失败。
MyClass::getBar("hello");

$myClass = new MyClass();
echo $myClass->Foo;

