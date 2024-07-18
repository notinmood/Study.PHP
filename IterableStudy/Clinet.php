<?php
/**
 * @file   : Clinet.php
 * @time   : 上午11:58
 * @date   : 2024/7/18
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */
namespace PHPStudy\IterableStudy;

require "../vendor/autoload.php";


$myArray = ["qingdao","beijing","shanghai"];


// 实现了Iterator接口的类，可以用foreach遍历
$diyIterator = new MyDiyIterator($myArray);
foreach ($diyIterator as $value) {
    var_dump($value);
}

// 实现了IteratorAggregate接口的类，可以用foreach遍历
$aggregateIterator = new MyAggregateIterator($myArray);
foreach ($aggregateIterator as $value) {
    var_dump($value);
}

// ArrayIterator类也实现了Iterator接口，可以用foreach遍历
$arrayIterator = new \ArrayIterator($myArray);
foreach ($arrayIterator as $value) {
    var_dump($value);
}
