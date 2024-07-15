<?php
/**
 * @file   : 1.数组是值类型.php
 * @time   : 20:39
 * @date   : 2022/2/4
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// 数组是值类型，当一个变量赋值给另一个变量时，实际上是将变量的副本赋值给另一个变量，因此，修改其中一个变量，另一个变量不会受到影响。
$one = array("a" => "red", "b" => "green", "c" => "blue");
$two = $one;

$two["a"] = "yellow";

var_dump("one: $one[a]");    // 输出：string(4) "red"
var_dump("two: $two[a]");    // 输出：string(6) "yellow"
var_dump("one: $one[b]");    // 输出：string(6) "green"
var_dump("two: $two[b]");    // 输出：string(6) "green"
var_dump("one: $one[c]");    // 输出：string(5) "blue"
var_dump("two: $two[c]");    // 输出：string(5) "blue"


//因为数组是值类型，PHP内置函数array_shift()、array_unshift()、
//array_pop()、array_push()等函数，传递参数时，都会加一个引用符号“&”，
//这样达到按引用传递的效果。对数组进行操作时，会影响到原数组。
$a = array("a" => "red", "b" => "green", "c" => "blue");

var_dump(array_shift($a));
echo PHP_EOL;
var_dump($a);
