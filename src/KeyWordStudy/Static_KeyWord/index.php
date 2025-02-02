<?php
/**
 * @file   : index.php
 * @time   : 8:22
 * @date   : 2021/9/3
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


use PHPStudy\KeyWordStudy\Static_KeyWord\StaticBiz;

require "../../../vendor/autoload.php";
$biz         = StaticBiz::getInstance();
$biz->myName = "zhangsan";

var_dump($biz->myName);
