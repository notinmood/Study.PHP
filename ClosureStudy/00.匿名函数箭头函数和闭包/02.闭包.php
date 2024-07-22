<?php
/**
 * @file   : 02.闭包.php
 * @time   : 上午9:17
 * @date   : 2024/7/22
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// 闭包
// 闭包是指有权访问另一个函数作用域中的变量的函数。
// 闭包的创建需要三个条件：
// 1. 外部函数必须返回一个函数
// 2. 内部函数必须引用外部函数的变量
// 3. 外部函数的返回值必须是内部函数的引用

// 在PHP中，闭包的实现方式有两种：
// 1. 标准闭包
// 2. 匿名函数和Closure::bind()方法的结合（这也是PHP中最常用的闭包实现方式，也是为什么匿名函数被称为闭包的原因）


// 一、标准闭包的实现
// 闭包的实现需要使用到匿名函数，匿名函数的返回值是一个函数，这个函数可以访问外部函数的变量。
// 闭包的语法：
// function ($arg1, $arg2, ...) use ($var1, $var2, ...) {
//     // 函数体
//     return function ($arg1, $arg2, ...) use ($var1, $var2, ...) {
//         // 内部函数体
//     };
// }



// 闭包的例子
function makeAdder($x): Closure
{
    return static function($y) use ($x) {
        return $x + $y;
    };
}

$add5 = makeAdder(5);
$add10 = makeAdder(10);

// 二、PHP中的闭包特殊实现
//但是，PHP中通常把内部的匿名函数就直接称为闭包，因为这个函数可以通过Closure::bind来绑定到外部的变量上，这样就可以访问外部函数的变量。
//比如：
$add= function ($x) {
    return  $this->temp + $x;
};

$obj = new stdClass();
$obj->temp = 10;

$add = Closure::bind($add, $obj, get_class($obj));

echo $add(5); // 15
