<?php
/**
 * @file   : ArrayCalc.php
 * @time   : 14:26
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * $a和$b有重复的键'a',用操作符号 + 和 array_merger的时候,结果不太一样
 * +            :得到的结果是,保留前面$a内的键'a'对应的值 '我在a内'
 * array_merger :得到的结果是,保留后面$b内的键'a'对应的值 '我在b内'
 */


$a = ["AA", "BB", "CC"];
$a["a"] = "我在a内";
$b["a"] = "我在b内";
$b["b"] = "bb";

$r = $a + $b;
var_dump($r);

$s = array_merge($a, $b);
var_dump($s);
