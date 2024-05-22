<?php
/**
 * @file   : index.php
 * @time   : 20:37
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

//用链表实现 职责链模式

require "../../vendor/autoload.php";

use Hiland\Utils\DataConstruct\LinkedList;
use PHP\Study\PatternStudy\ChainOfResponsibilities2\HighHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities2\LowerHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities2\MiddleHandler;
use PHP\Study\PatternStudy\ChainOfResponsibilities2\Request;


$linkedList= new LinkedList();

$lh= new LowerHandler($linkedList);
$mh= new MiddleHandler($linkedList);
$hh= new HighHandler($linkedList);


$request= new Request("学习成绩", 85);

$result= "hello world!";
try {
    $result = $lh->handle($request);
} catch (Exception $e) {
    echo "$e";
}
echo "$result";

