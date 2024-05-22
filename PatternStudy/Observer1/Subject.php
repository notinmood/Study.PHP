<?php
/**
 * @file   : Subject.php
 * @time   : 15:37
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer1;

use Hiland\Utils\Data\ArrayHelper;

abstract class Subject
{
    protected array $observers = [];

    public function add(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function remove(Observer $observer)
    {
        $this->observers = ArrayHelper::removeItem($this->observers, $observer);

        /**
         * 或者直接删除
         */
        // if($idx = array_search($observer,$this->observers,true)) {
        //     unset($this->observers[$idx]);
        // }
    }

    /**
     * 通知方法的实现,通常为循环各个观察器，然后调用观察器上的方法.
     * 但因为观察器上的方法，是什么类型的签名不确定,因此这个方法的可以到具体的subject内重写
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->response($this);
        }
    }
}