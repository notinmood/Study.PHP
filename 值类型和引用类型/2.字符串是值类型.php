<?php
/**
 * @file   : 2.字符串是值类型.php
 * @time   : 20:48
 * @date   : 2022/2/4
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

$a= "qingdao";
$b= $a;

$a = "beijing";

el($a);
el($b);