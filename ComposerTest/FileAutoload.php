<?php
/**
 * @file: FileAutoload.php
 * @time: 9:39
 * @date: 2021/8/10
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

/**
 *测试 composer.json 内自动加载 php 文件，而实现的功能。
 */
sayHi("zhangsan");
echo PHP_EOL;
sayBye("zhangsan");
echo PHP_EOL;
echo getName("zhang", "san");