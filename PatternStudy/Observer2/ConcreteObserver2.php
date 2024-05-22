<?php
/**
 * @file   : ConcreteObserver2.php
 * @time   : 20:54
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer2;

use Hiland\Utils\IO\ConsoleHelper;
use SplObserver;
use SplSubject;

/**
 * 具体观察者
 */
class ConcreteObserver2 implements SplObserver {

    public function update(SplSubject $subject) {
        ConsoleHelper::echoLine("ConcreteObserver2  value is {$subject->getValue()}");
    }

}