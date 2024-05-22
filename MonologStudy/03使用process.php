<?php
/**
 * @file   : 01入门.php
 * @time   : 11:50
 * @date   : 2021/8/22
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\WebProcessor;

//1、创建Logger
$name = "MyLogger";
$log = new Logger($name);

//2、创建Handler
$logFile = "myLog.log";
$handler = new StreamHandler($logFile, Logger::DEBUG);
$log->pushHandler($handler);

//3.1添加系统内置的processor
$log->pushProcessor(new WebProcessor());
$log->pushProcessor(new IntrospectionProcessor());
//3.2添加自定义的processor函数
$log->pushProcessor(function ($record) {
    $record['extra'][] = "hello";
    $record['extra'][] = "world";
    return $record;
});

//3.3添加自定义的Process类型(略)


//9、进行记录
$log->addRecord(Logger::DEBUG, "Hello");