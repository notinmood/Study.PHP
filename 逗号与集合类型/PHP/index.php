<?php
/**
 * @file   : index.php
 * @time   : 17:17
 * @date   : 2022/2/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

// +--------------------------------------------------------------------------
// |::说明：| array 的最后一个元素后面可以有一个逗号
// +--------------------------------------------------------------------------

$myArray = ["a" => "AA", "b" => "BB", "C",];
dump($myArray);


