<?php
/**
 * @file   : Using.php
 * @time   : 上午7:12
 * @date   : 2024/7/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\ConstructStudy\ProtectedArg;

require "../../vendor/autoload.php";

$obj1 = new MyClassProtectedArgs("zhangsan");
var_dump($obj1);
// --output--
// object(PHPStudy\ConstructStudy\ProtectedArg\MyClassProtectedArgs)#2 (1) {["name":protected]=>  string(8) "zhangsan"}

var_dump($obj1->getName());
// --output--
// string(8) "zhangsan"

$obj2 = new MyClassPublicArgs("lisi");
var_dump($obj2);
// --output--
// object(PHPStudy\ConstructStudy\ProtectedArg\MyClassPublicArgs)#3 (1) {["name"]=>  string(8) "lisi"}

var_dump($obj2->name);
// --output--
// string(8) "lisi"


$obj3 = new MyClassPrivateArgs("wangwu");
var_dump($obj3);
// --output--
// object(PHPStudy\ConstructStudy\ProtectedArg\MyClassPrivateArgs)#3 (1) {["name"]=>  string(8) "wangwu"}

var_dump($obj3->getName());
// --output--
// string(8) "wangwu"

$obj4 = new MyClassCommonArgs("wangwu");
var_dump($obj4);
// --output--
// object(PHPStudy\ConstructStudy\ProtectedArg\MyClassCommonArgs)#5 (0) {}
