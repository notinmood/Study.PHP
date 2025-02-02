<?php
/**
 * @file   : index.php
 * @time   : 14:28
 * @date   : 2022/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHPStudy\调试与跟踪\simpleDemo\B;

require "../../../vendor/autoload.php";

$result = B::Bar();
print($result);
