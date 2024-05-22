<?php
/**
 * @file   : PHP8下读取不存在的数组元素报错.php
 * @time   : 20:16
 * @date   : 2022/1/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\Data\ArrayHelper;
require "../vendor/autoload.php";
/**
 * php8.0下报错。原因是读取读取数组中不存在的 key
 */
$result = ["qingdao"];
var_dump($result[0]);
var_dump($result[1]);

/**
 * 读取数组中的元素的时候，建议使用ArrayHelper::getItem(),因为内部已经做了安全性处理。
 */
$first= ArrayHelper::getItem($result,1,"beijing");
var_dump($first);