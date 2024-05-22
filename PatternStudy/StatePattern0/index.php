<?php
/**
 * @file   : index.php
 * @time   : 9:34
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


use PHP\Study\PatternStudy\StatePattern0\Member;

require "../../vendor/autoload.php";

$member = new Member();
$member->setScore(1200);
$member->getDiscount();

$member->setScore(900);
$member->getDiscount();

$member->setScore(700);
$member->getDiscount();

$member->setScore(300);
$member->getDiscount();