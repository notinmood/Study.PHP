<?php
/**
 * @file   : ArrayMap中的匿名参数.php
 * @time   : 10:08
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


$myArray = [1, 2, 3, 4, 5];

function multi($item)
{
    return $item * 2;
}

$r = array_map('multi', $myArray);
var_dump($r);
