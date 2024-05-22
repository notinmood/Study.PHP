<?php
/**
 * @file   : client.php
 * @time   : 17:48
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudyPatternStudyBuilder02;

use PHP\Study\PatternStudy\Builder02\PersonBuilder;

require "../../vendor/autoload.php";

/**
 * 使用Builder模式的优势：用户非常容易拿到完整状态的对象--
 * 在创建对象前可以给其赋值;但一直到build()的时候,才有完整的对象.
 */

$builder = new PersonBuilder("zhangsan");
$person = $builder
    ->setJob("IT Engineer")
    ->setHabit("football")
    ->setLocation("qingdao")
    ->build();

var_dump($person);