<?php
/**
 * @file   : ArrayMap中的匿名函数作为参数2.php
 * @time   : 10:08
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


$a1 = [1, 2, 3, 4, 5];
$a2 = [6, 7, 8, 9, 10];

$r = array_map(function ($ia, $ib) {
    return $ia + $ib;
}, $a1, $a2);

var_dump($r);
