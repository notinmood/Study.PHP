<?php
/**
 * @file   : ArrayMap中的匿名参数.php
 * @time   : 10:08
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


$a1 = [1, 2, 3, 4, 5];
$a2 = [6, 7, 8, 9, 10];

function addItem($ia, $ib)
{
    return $ia + $ib;
}

$r = array_map('addItem', $a1, $a2);
var_dump($r);
