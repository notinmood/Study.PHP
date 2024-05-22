<?php
/**
 * @file   : client.php
 * @time   : 15:43
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */
namespace PHP\Study\PatternStudy\Builder01;
require "../../vendor/autoload.php";

// 客户端代码
$bp = new BuilderThinPerson();
$pd = new PersonDirector($bp);
$pd->createPerson();

