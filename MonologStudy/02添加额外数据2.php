<?php
/**
 * @file   : 02添加额外数据1.php
 * @time   : 8:27
 * @date   : 2021/8/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


require "../vendor/autoload.php";

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

//1、创建Logger
$name = "MyLogger";
$log = new Logger($name);

//2、创建Handler
$logFile = "myLog.log";
$handler = new StreamHandler($logFile, Logger::DEBUG);
$log->pushHandler($handler);

//3、使用process添加数据(使用自定义的匿名函数,给匿名函数的参数数组$record的extra元素赋值)
$log->pushProcessor(function ($record) {
    $user1['name'] = 'zhangsan';
    $user1['age'] = 20;
    $user2['name'] = 'lisi';
    $user2['age'] = 19;
    $record['extra'][] = $user1;
    $record['extra'][] = $user2;
    return $record;
});

//9、进行记录
$log->addRecord(Logger::DEBUG, "Hello");
