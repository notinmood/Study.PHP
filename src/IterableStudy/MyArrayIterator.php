<?php
/**
 * @file   : MyArrayIterator.php
 * @time   : 6:56
 * @date   : 2021/10/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHPStudy\IterableStudy;

use ArrayIterator;

class MyArrayIterator extends ArrayIterator
{
    public function __construct(array $arr)
    {
        parent::__construct($arr);
    }
    // 自定义方法
    public function getCurrentElement()
    {
        return $this->current();
    }
}
