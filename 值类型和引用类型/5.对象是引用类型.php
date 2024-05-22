<?php
/**
 * @file   : 5.对象是引用类型.php
 * @time   : 20:54
 * @date   : 2022/2/4
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";
use PHP\Study\_res\Student;

$s1 = new Student("zhangsan", 20);

$s2= $s1;

$s1-> happyBirthDay();

el($s1->getAge());
el($s2->getAge());