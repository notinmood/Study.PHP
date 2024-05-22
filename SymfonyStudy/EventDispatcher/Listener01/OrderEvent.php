<?php
/**
 * @file   : OrderEvent.php
 * @time   : 9:31
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Listener01;


use Symfony\Contracts\EventDispatcher\Event;

class OrderEvent extends Event
{
    private string $orderNumber="";
    public function __construct($orderNumber)
    {
        $this->orderNumber=$orderNumber;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
}