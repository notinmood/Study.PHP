<?php
/**
 * @file   : index.php
 * @time   : 19:18
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

//一、完全自定义实现的职责链模式应用

//责任链模式将处理请求的对象连成一条链，沿着这条链传递该请求，直到有一个对象处理请求为止，
//这使得多个对象都有机会处理请求，从而避免请求的发送者和接受者之间的耦合关系。
//
//责任链模式在现实中使用的很多，常见的就是 OA 系统中的工作流。

require "../../vendor/autoload.php";

use PHP\Study\PatternStudy\ChainOfResponsibilities1\HighHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities1\LowerHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities1\MiddleHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities1\Request;

$request= new Request("学习成绩", 85);

$lh= new LowerHandler();
$mh= new MiddleHandler();
$hh= new HighHandler();

$lh->successor= $mh;
$mh->successor= $hh;

$result= "hello world!";
try {
    $result = $lh->handle($request);
} catch (Exception $e) {
    echo "$e";
}
echo "$result";



