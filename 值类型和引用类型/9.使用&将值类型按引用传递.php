<?php
/**
 * @file   : 9.使用&将值类型按引用传递.php
 * @time   : 上午8:59
 * @date   : 2024/7/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

function commonTest($arr): void
{
    /** @noinspection all */
    $arr[0] = 100;
}


function referenceTest(&$arr): void
{
    $arr[0] = 100;
}

$myArr= array(1, 2, 3);
/** @noinspection all */
commonTest($myArr);
var_dump($myArr);//输出：[1, 2, 3]

referenceTest($myArr);
var_dump($myArr);//输出：[100, 2, 3]
