<?php
/**
 * @file   : 2.key和current方法.php
 * @time   : 22:01
 * @date   : 2022/6/29
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// +--------------------------------------------------------------------------
// |::说明·| key 返回数组当前元素的键名称（没有明确指定的简单数组（即索引数组），其键名称为数字索引号）
// |::一一·| current 返回数组当前元素的值。
// |::二二·| next 移动到下一个元素。
// |::三三·| prev 移动到上一个元素。
// |::四四·| end 移动到最后一个元素。
// |::五五·| reset 重新移动到第一个元素。
// |::六六·| 以上方法均可用于索引数组和关联数组。
// +--------------------------------------------------------------------------


$simple = array("Bill", "Steve", "Mark", "David");

var_dump(array_keys($simple));
// array(4) {
//[0]=>
//  int(0)
//  [1]=>
//  int(1)
//  [2]=>
//  int(2)
//  [3]=>
//  int(3)
//}

var_dump(array_values($simple));
//array(4) {
//    [0]=>
//  string(4) "Bill"
//    [1]=>
//  string(5) "Steve"
//    [2]=>
//  string(4) "Mark"
//    [3]=>
//  string(5) "David"
//}

$complex1 = array("q" => "qingdao", "b" => "beijing");
var_dump(array_keys($complex1));
// array(2) {
//  [0]=>
//  string(1) "q"
//  [1]=>
//  string(1) "b"
//}

var_dump(array_values($complex1));
// array(2) {
//  [0]=>
//  string(7) "qingdao"
//  [1]=>
//  string(7) "beijing"
//}
