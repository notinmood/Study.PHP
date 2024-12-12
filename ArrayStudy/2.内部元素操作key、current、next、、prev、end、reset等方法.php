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

var_dump(key($simple)); // 0
var_dump(current($simple)); // "Bill"

$complex1 = array(1 => "qingdao", 2 => "beijing");
var_dump(key($complex1)); // 1
var_dump(current($complex1)); // "qingdao"

$complex2 = array("q" => "qingdao", "b" => "beijing", "s" => "shanghai");
var_dump(key($complex2)); // "q"
var_dump(current($complex2)); // "qingdao"

next($complex2); // 移动到下一个元素
var_dump(key($complex2)); // "b"
var_dump(current($complex2)); // "beijing"

reset($complex2); // 重新移动到第一个元素
var_dump(key($complex2)); // "q"
var_dump(current($complex2)); // "qingdao"

end($complex2); // 移动到最后一个元素
var_dump(key($complex2)); // s
var_dump(current($complex2)); // "shanghai"

prev($complex2); // 移动到上一个元素
var_dump(key($complex2)); // "b"
var_dump(current($complex2)); // "beijing"
