<?php
/**
 * @file   : Aggregate.php
 * @time   : 10:37
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\IteratorPattern;

interface Aggregate
{
    public function CreateIterator(): IIterator;
}