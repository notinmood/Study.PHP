<?php
/**
 * @file   : MyDiyIterator.php
 * @time   : 9:14
 * @date   : 2021/10/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHPStudy\IterableStudy;

use Iterator;

class MyDiyIterator implements Iterator
{

    private array $_data;

    public function __construct(Array $arr)
    {
        $this->_data = $arr;
    }

    public function current()
    {
        return current($this->_data);
    }

    public function key()
    {
        return key($this->_data);
    }

    public function next(): void
    {
        next($this->_data);
    }

    public function rewind(): void
    {
        reset($this->_data);
    }

    public function valid(): bool
    {
        return $this->key() !== NULL;
    }
}
