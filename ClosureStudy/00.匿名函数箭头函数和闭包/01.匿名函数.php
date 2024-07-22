<?php
/**
 * @file   : 01.匿名函数.php
 * @time   : 上午9:10
 * @date   : 2024/7/22
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// 匿名函数是一种没有名字的函数，可以直接使用，不需要给它起名字；但可以作为变量赋值给其他变量。
// 匿名函数可以作为参数传递给其他函数，也可以作为返回值。
// 匿名函数的语法：
// static function ($参数列表) use ($变量列表) {
//     函数体
// }


//1. 匿名函数的普通用法
// 1.1. 定义匿名函数
$func = static function ($x) {
    return $x * $x;
};

// 1.2. 调用匿名函数
echo $func(5); // 输出 25

// 2. 匿名函数作为参数传递给其他函数
function call_func($func, $x) {
    return $func($x);
}

echo call_func(static function ($x) {
    return $x * $x;
}, 5); // 输出 25

// 3. 匿名函数作为返回值
function get_func(): Closure
{
    return static function ($x) {
        return $x * $x;
    };
}


$func = get_func();
echo $func(5); // 输出 25
