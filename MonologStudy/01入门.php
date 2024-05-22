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

//1、创建Logger
$name = "MyLogger";
$log = new Logger($name);

//2、创建Handler
$logFile = "myLog.log";
$handler = new StreamHandler($logFile, Logger::DEBUG);
$log->pushHandler($handler);

//9、进行记录
$log->addRecord(Logger::DEBUG, "Hello");
// $log->warning("我是一个warning信息");
// $log->error("我是一个error信息");
// $log->debug("我是一个debug信息");