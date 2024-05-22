<?php
/**
 * @file   : index.php
 * @time   : 10:41
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use PHP\Study\PatternStudy\IteratorPattern\ConcreteAggregate;

/**
 * 1、获取迭代器
 */
$aggregate = new ConcreteAggregate();
$iterator = $aggregate->CreateIterator();

/**
 * 2、所有返回的迭代器都可以对成员元素依次访问
 */
while (!$iterator->IsDone()) {
    echo $iterator->CurrentItem(), PHP_EOL;
    $iterator->Next();
}
