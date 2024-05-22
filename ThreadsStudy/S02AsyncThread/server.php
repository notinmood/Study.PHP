<?php
/**
 * @file   : server.php
 * @time   : 18:36
 * @date   : 2021/9/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

sleep(3);
header("content-type:text/html;charset=utf-8");

//error_reporting(0);
//ini_set('html_errors',false);
//ini_set('display_errors',false);

$userName = $_POST['name'] ?? '';
$userPwd = $_POST['pwd'] ?? '';

echo "data gotten:" . $userName . $userPwd;
echo nl2br(PHP_EOL);
echo 'success ok';


//1、创建Logger
$name = "MyLogger";
$log = new Logger($name);

//2、创建Handler
$logFile = "myLog.log";
$handler = new StreamHandler($logFile, Logger::DEBUG);
$log->pushHandler($handler);

//3、记录信息
$log->addRecord(Logger::DEBUG, "Hello");
$log->addRecord(Logger::DEBUG, "data gotten:" . $userName . $userPwd);
die;
