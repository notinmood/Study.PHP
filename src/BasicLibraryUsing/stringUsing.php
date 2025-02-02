<?php
/**
 * @file   : stringUsing.php
 * @time   : 下午12:40
 * @date   : 2024/6/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Data\StringHelper;

require "../../vendor/autoload.php";

$str = "Hello World";

// 1. 字符串长度
echo StringHelper::getLength($str); // 11
