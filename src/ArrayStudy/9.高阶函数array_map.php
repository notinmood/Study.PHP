<?php
/**
 * @file   : 9.高阶函数map.php
 * @time   : 上午9:28
 * @date   : 2024/7/19
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 高阶函数map
 * array_map() 函数用于对数组中的每个元素应用一个回调函数，并返回一个新的数组。
 * 回调函数可以是一个匿名函数，也可以是一个已定义的函数名称。
 *
 * @param callable $callback 回调函数
 * @param array $array 数组
 * @return array 返回一个新的数组，包含回调函数对数组的每个元素的返回值。
 */
var_dump("一、以下是使用array_map函数调用外部函数和匿名函数对数组中的元素进行操作的例子");
// 原始数组
$numbers = array(1, 2, 3, 4, 5);

// 方式1.【使用既有的全局函数】定义一个函数，对数组中的每个元素进行平方操作
function square($number): float|int
{
    return $number * $number;
}

$squaredNumbers = array_map('square', $numbers);// 注意：此处使用字符串“square”，调用已定义的函数square
var_dump($squaredNumbers);
// 输出：Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


// 方式2.【使用匿名函数】定义一个匿名函数，对数组中的每个元素进行平方操作
$squaredNumbers = array_map(static function($number) {
    return $number * $number;
}, $numbers);
var_dump($squaredNumbers);
// 输出：Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


var_dump("--------------------------");
var_dump("二、以下是使用map函数对一个数组中每个元素进行映射和多个数组中的元素进行操作的例子");

//1. 使用map函数对数组中每个元素进行映射
$myArray = [1, 2, 3, 4, 5];

function multi($item): float|int
{
    return $item * 2;
}

$r = array_map('multi', $myArray);
var_dump($r);

// 2. 使用map函数对多个数组中的元素进行操作
$a1 = [1, 2, 3, 4, 5];
$a2 = [6, 7, 8, 9, 10];

function addItem($ia, $ib)
{
    return $ia + $ib;
}

$r = array_map('addItem', $a1, $a2);
var_dump($r);

