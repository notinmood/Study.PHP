<?php
/**
 * @file   : index.php
 * @time   : 15:47
 * @date   : 2022/1/27
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */
require "../../vendor/autoload.php";

use PHP\Study\MagicMethodStudy\魔术属性__get_set\Student;

$s    = new Student();
$city = $s->City;
el($city);

$s->City = "qingdao";
$city    = $s->City;
el($city);

$s->School = "QDU";
$city      = $s->School;
el($city);

$r= $s->getCity();
el($r);