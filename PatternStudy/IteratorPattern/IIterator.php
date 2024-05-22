<?php
/**
 * @file   : IIterator.php
 * @time   : 10:40
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\IteratorPattern;

interface IIterator
{
    public function First();
    public function Next();
    public function IsDone();
    public function CurrentItem();
}