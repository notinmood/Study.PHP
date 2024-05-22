<?php
/**
 * @file   : index.php
 * @time   : 20:52
 * @date   : 2021/10/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 本目录的Student类型是演示的,如何将普通的实例方法通过__callStatic进行静态调用
 * (将实例方法转成静态方法)
 */

use PHP\Study\MagicMethodStudy\MethodFromEntityToStatic\Student;

require "../../vendor/autoload.php";

echo Student::getNation();
