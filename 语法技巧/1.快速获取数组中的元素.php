<?php
/**
 * @file   : 快速获取数组中的元素.php
 * @time   : 16:04
 * @date   : 2022/3/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$myArray = [1, 3, 5, 7];
[$a, $b, $c] = $myArray;

var_dump($a); //int(1)
var_dump($b); //int(3)
var_dump($c); //int(5)

// 以下展开运算符不被支持
// [$a, ...$c] = $myArray;

// +--------------------------------------------------------------------------
// |::说明·| 有点类似于 JavaScript 的对象成员的解构，参考如下文档：
// |::一一·| E:\myworkspace\MyStudy\VueStudy\0.脚本引入方式\00预备知识\2.对象成员的解构.js
// +--------------------------------------------------------------------------