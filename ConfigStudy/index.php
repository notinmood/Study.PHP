<?php
/**
 * @file   : index.php
 * @time   : 16:36
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\Data\ConfigHelper;

require "../vendor/autoload.php";

$option = "include_path";
$v = ini_get("$option");
echo "$v";
