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
// |::说明·| key 返回数组当前元素的键名称（没有明确指定的简单数组，其键名称为数字索引号）
// |::一一·| current 返回数组当前元素的值
// +--------------------------------------------------------------------------


$simple = array("Bill", "Steve", "Mark", "David");
var_dump(key($simple)); // 0
var_dump(current($simple)); // "Bill"

$complex1 = array(1 => "qingdao", 2 => "beijing");
var_dump(key($complex1)); // 1
var_dump(current($complex1)); // "qingdao"

$complex2 = array("q" => "qingdao", "b" => "beijing");
var_dump(key($complex2)); // "q"
var_dump(current($complex2)); // "qingdao"

