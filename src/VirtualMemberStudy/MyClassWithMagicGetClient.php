<?php
/**
 * @file   : MyClassWithMagicGetClient.php
 * @time   : 下午3:48
 * @date   : 2024/7/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require '../../vendor/autoload.php';
use PHPStudy\VirtualMemberStudy\MyClassWithMagicGet;

$myClass = new MyClassWithMagicGet();

// 未真实定义的属性，访问时会触发 __get() 方法

//1->如果这个属性也没有通过@property注释定义，那么IDE会提示错误，无法识别这个属性
//2->如果这个属性是通过@property注释定义的，那么IDE会提示这个属性的类型，并且可以自动补全

 /** @noinspection all 如果不使用@noinspection all，IDE会提示错误，无法识别这个属性 */
echo $myClass->name;

el();

$myClass -> Foo = "china";
echo $myClass->Foo; // output: "china"
