<?php
/**
 * @file: client.php
 * @time: 15:50
 * @date: 2021/8/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ComposerPattern;
require "../../vendor/autoload.php";

$engine = new Gas();
$car = new ToyotaCar($engine);
$car->drive();
echo "汽油耗尽，切换为电池模式";
$engine = new Battery();
$car = new ToyotaCar($engine);
$car->drive();



