<?php
/**
 * @file   : index.php
 * @time   : 20:41
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 在php的SPL支持观察者模式，SPL 提供了 SplSubject 和 SplObserver 接口。
 * SplSubject 接口提供了attach()、detach()、notify() 三个方法。而 SplObserver 接口则提供了 update()方法。
 * SplSubject 派生类维护了一个状态，当状态发生变化时 - 比如属性变化等，就会调用 notify() 方法，这时，之前在 attach() 方法中注册的所有 SplObserver 实例的 update() 方法就会被调用。
 */

use PHP\Study\PatternStudy\Observer2\ConcreteObserver1;
use PHP\Study\PatternStudy\Observer2\ConcreteObserver2;
use PHP\Study\PatternStudy\Observer2\ConcreteSubject;

require "../../vendor/autoload.php";


$subject = new ConcreteSubject();
$observer1 = new ConcreteObserver1();
$observer2 = new ConcreteObserver2();
$subject->attach($observer1);
$subject->attach($observer2);
$subject->setValue(5);