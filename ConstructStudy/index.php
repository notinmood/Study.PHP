<?php
/**
 * @file: index.php
 * @date: 2021/8/4
 * @time: 9:21
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 说明: 构造方法研究
 * - 第一种情况,派生类有构造方法. 缺省情况下，派生类的构造方法，不会调用基类的构造方法，需要开发人员手工调用。
 * (跟C#（.NET）不同。在C#里面，创建派生类实例的时候，默认除了调用派生类的构造方法，还会调用基类的构造方法)
 * - 第二种情况,派生类没有构造方法. 这个时候,创建派生类实例的时候,是会调用基类构造方法的.(如下方的创建MyClassC实例的情形)
 */


use PHP\Study\ConstructStudy\MyClassB;
use PHP\Study\ConstructStudy\MyClassC;

require_once "../vendor/autoload.php";


//$a = new MyClassA();
$b = new MyClassB();
$c = new MyClassC();
