<?php
/**
 * @file   : index.php
 * @time   : 9:04
 * @date   : 2022/1/24
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\KeyWordStudy\self_parent_this\CollegeStudent;

require "../../vendor/autoload.php";

$cs = new CollegeStudent("张三",20);

$cs->echoNameWithThis();
el();
$cs->echoWork();
el();
$cs->echoMakeFriends();
el();
$cs->echoWalk();
el();
$cs->echoAgeWithThis();
