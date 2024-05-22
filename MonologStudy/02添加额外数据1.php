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
$log= new Logger($name);

//2、创建Handler
$logFile= "myLog.log";
$handler= new StreamHandler($logFile,Logger::DEBUG);
$log->pushHandler($handler);

//9、进行记录
//9.1 用一维数组给addRecord传递第三个参数
$log-> addRecord(Logger::DEBUG, "Hello",['name'=>'zhangsan','age'=>20]);

//9.2 用二维数组给addRecord传递第三个参数
$user1['name']='zhangsan';
$user1['age']= 20;
$user2['name']='lisi';
$user2['age']= 21;
$myArray[]= $user1;
$myArray[]= $user2;
$log-> addRecord(Logger::DEBUG, "Hello",$myArray);