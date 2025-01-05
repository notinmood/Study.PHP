<?php
/**
 * @file   : index.php
 * @time   : 12:42
 * @date   : 2022/1/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\Config\ConfigHelper;

require "../vendor/autoload.php";
/**
 * 测试 .env 文件的加载
 */
$actual = ConfigHelper::getEnv("database_mysql.username");
dump($actual);