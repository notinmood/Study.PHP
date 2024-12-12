<?php
/**
 * @file   : index.php
 * @time   : 上午11:03
 * @date   : 2024/8/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

//ReflectionNamedType

use PHPStudy\ReflectionStudy\Biz\Example;

require "../vendor/autoload.php";


$example= new Example();
$reflectionClass= new ReflectionClass($example);
//或者直接传入类的全名称
//$reflectionClass = new ReflectionClass(Example::class);

$property = $reflectionClass->getProperty('name');
$namedType = $property->getType();
var_dump($namedType);

if ($namedType instanceof ReflectionNamedType) {
    echo 'Property type: ' . $namedType->getName();
    echo "\nis build-in: ".$namedType->isBuiltin();
    var_dump("\n");
    var_dump($namedType->isBuiltin());
}

print("\n──分隔符───────────────────────────────────\n");

if ($namedType instanceof ReflectionType) {
    echo 'Property type: ' . $namedType->getName();
}


print("\n──分隔符───────────────────────────────────\n");
$inner= $reflectionClass->getProperty("inner");
var_dump($inner);
$innerType= $inner->getType();
var_dump($innerType);
var_dump($innerType->isBuiltin());
var_dump($innerType->getName());
