<?php
/**
 * @file   : index.php
 * @time   : 16:58
 * @date   : 2021/9/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\ThreadsStudy\S01MultiThreads\ThreadHelper;

require "../../vendor/autoload.php";


$url1 = "http://localhost/PHP.Study/ThreadsStudy/S01MultiThreads/server.php";
$url2 = "http://localhost/PHP.Study/ThreadsStudy/S01MultiThreads/server.php";
echo date("Y-m-d H:i:s") . '-----' . time() . PHP_EOL;
ThreadHelper::multiRun($url1, $url2);
echo date("Y-m-d H:i:s") . '-----' . time() . PHP_EOL;
echo "ok";
