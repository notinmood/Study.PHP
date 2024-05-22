<?php
/**
 * @file   : ConcreteAggregate.php
 * @time   : 10:38
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IteratorPattern;

class ConcreteAggregate implements Aggregate
{
    public function CreateIterator(): IIterator
    {
        $list = [
            "a",
            "b",
            "c",
            "d",
        ];
        return new ConcreteIterator($list);
    }
}
