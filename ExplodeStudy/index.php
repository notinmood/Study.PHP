<?php
/**
 * @file   : index.php
 * @time   : 18:05
 * @date   : 2022/1/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
var_dump(explode(',', $input1));

var_dump(explode(',', $input2));

var_dump(explode(',', $input3));

/**
 * 以下方法，PHP8中会报错--PHP Warning:  "Undefined array key 1 in ***.php (读取不存在的 key)" (具体原因参看 PHP8下读取不存在的数组元素报错.php)
 * 但 PHP7 不会报错.
 */
list($k, $v) = explode(",", $input1);
var_dump($k);
var_dump($v);





