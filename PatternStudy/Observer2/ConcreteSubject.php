<?php
/**
 * @file   : ConcreteSubject.php
 * @time   : 20:53
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer2;

use SplObserver;
use SplSubject;
/**
 *具体目标
 */
class ConcreteSubject implements SplSubject {
    private $observers, $value;
    public function __construct() {
        $this->observers = array();
    }

    public function attach(SplObserver $observer) { //注册观察者
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer) { //释放观察者
        if($idx = array_search($observer,$this->observers,true)) {
            unset($this->observers[$idx]);
        }
    }

    public function notify() { //通知所有观察者
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setValue($value) {
        $this->value = $value;
        $this->notify();
    }

    public function getValue() {
        return $this->value;
    }

}