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
 * 高阶函数array_reduce()
 * 作用: 对数组中的元素进行累计操作，返回累计结果
 * 语法: array_reduce(array $array, callable $callback, mixed $initial = NULL)
 * 参数:
 *   $array: 待处理的数组
 *   $callback: 回调函数，累计操作的函数，该函数接收两个参数，第一个参数为累计结果，第二个参数为数组中的元素
 *   $initial: 初始值，默认为NULL，表示从数组的第一个元素开始累计
 * 返回: 返回累计结果
 */


$numbers = array(1, 2, 3, 4, 5);

// 1. 利用array_reduce()函数实现数组求和(函数名方式)
function add($a, $b)
{
    return $a + $b;
}

$result = array_reduce($numbers, "add");// 注意：这里的函数名是字符串形式，必须是全局函数
echo "The sum of the numbers is: $result";
// 输出结果: The sum of the numbers is: 15


// 2. 利用array_reduce()函数实现数组求和(静态匿名函数方式)
$result = array_reduce($numbers, static function ($carry, $item) {
    return $carry + $item;
});
echo "The sum of the numbers is: $result";
// 输出结果: The sum of the numbers is: 15
