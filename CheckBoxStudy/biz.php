<?php
/**
 * @file   : biz.php
 * @time   : 9:39
 * @date   : 2021/8/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


require "../vendor/autoload.php";

use Hiland\Utils\IO\ConsoleHelper;
use Hiland\Utils\Web\RequestHelper;
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
if (RequestHelper::isPost()) {
    $log->addRecord(Logger::DEBUG, "这是一个post请求!");
} else {
    $log->addRecord(Logger::DEBUG, "NNN这不是一个post请求!");
}


displayPostValue("myID");
displayPostValue("myName");
displayPostValue("myJob");
displayPostValue("myCity");

displayPostValue("myLike");
displayPostValue("sex");
echo "this is a demo!";


function getPostValue($name)
{
    $myValue = $_POST[$name];
    if ($myValue) {
        return $myValue;
    } else {
        return "";
    }
}

function displayPostValue($name)
{
    $value = getPostValue($name);
    if ($value) {
        ConsoleHelper::echoLine("YYY-${name}的值为${value}");
    } else {
        ConsoleHelper::echoLine("NNN-不存在 ${name}");
    }
}


