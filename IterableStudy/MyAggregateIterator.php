<?php
/**
 * @file   : AggragateIterator.php
 * @time   : 9:19
 * @date   : 2021/10/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace IterableStudy;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

class MyAggregateIterator implements IteratorAggregate
{

    /**
     * @return Traversable|ArrayIterator
     */
    public function getIterator(): Traversable|ArrayIterator
    {
        return new ArrayIterator();
    }
}
