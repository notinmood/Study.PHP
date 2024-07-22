<?php
/**
 * @file   : 9.高阶函数array_filter.php
 * @time   : 上午10:02
 * @date   : 2024/7/19
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * array_filter() 函数用于过滤数组中的元素，返回一个包含所有符合指定条件的元素的新数组。
 * 语法：array_filter(array $array, callable $callback = null)
 * 参数：
 * $array：要过滤的数组。
 * $callback：回调函数，用于对数组的每个元素进行判断，返回 true 表示保留该元素，false 表示丢弃该元素。
 * 如果 $callback 为 null，则保留所有非空元素。
 * 返回值：返回一个包含所有符合指定条件的元素的新数组。
 */

// 原始数组
$arr = array(1, 2, 3, 4, 5);


// 方式1.【使用既有的全局函数】定义一个函数，求数组中的奇数元素
function filter_odd($value): bool
{
    return $value % 2 === 1;
}

$new_arr = array_filter($arr, "filter_odd");// 注意：此处使用字符串“filter_odd”，调用已定义的函数 filter_odd()
print_r($new_arr);
// 输出结果：Array ( [0] => 1 [2] => 3 [4] => 5 )


// 方式2.【使用匿名函数】定义一个匿名函数，求数组中的奇数元素
$new_arr = array_filter($arr, static function ($value) {
    return $value % 2 === 1;
});
print_r($new_arr);
// 输出结果：Array ( [0] => 1 [2] => 3 [4] => 5 )


// 方式3.【使用箭头函数】定义一个箭头函数，求数组中的奇数元素
$new_arr = array_filter($arr, static fn ($value) =>  $value % 2 === 1);
print_r($new_arr);
// 输出结果：Array ( [0] => 1 [2] => 3 [4] => 5 )
