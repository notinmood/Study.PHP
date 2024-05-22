<?php
/**
 * @file   : DemoEvent.php
 * @time   : 17:08
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber00;

use Symfony\Contracts\EventDispatcher\Event;

class DemoEvent extends Event
{
    const NAME = 'demo.event';

    protected $foo;

    public function __construct()
    {
        $this->foo = 'bar';
    }

    public function getFoo()
    {
        return $this->foo;
    }
}
