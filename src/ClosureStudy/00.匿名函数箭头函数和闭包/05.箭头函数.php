<?php
/**
 * @file   : 05.箭头函数.php
 * @time   : 上午9:01
 * @date   : 2024/7/22
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 箭头函数
 * 箭头函数是一种新的函数语法，它与普通函数的语法有些不同。
 * 箭头函数的语法类似于匿名函数，但它使用fn关键字和“=>”符号而不是“function”关键字。
 * 箭头函数没有自己的 this 和 arguments 对象，因此不能使用 this 和 arguments 关键字。
 */

// 定义一个简单的箭头函数
$add = static fn ($a, $b) => $a + $b;

// 调用这个函数
echo $add(2, 3); // 输出 5

// 输出函数的详细信息
var_dump($add);

// 输出：
//object(Closure)#1 (1) {
//["parameter"]=>
//  array(2) {
//    ["$a"]=>
//    string(10) "<required>"
//    ["$b"]=>
//    string(10) "<required>"
//  }
//}
