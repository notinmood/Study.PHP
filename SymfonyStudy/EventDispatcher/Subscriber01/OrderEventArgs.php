<?php
/**
 * @file   : OrderEventArgs.php
 * @time   : 9:31
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01;


use Symfony\Contracts\EventDispatcher\Event;

/**
 * 按照微软的规则,这个类型应该叫做事件参数类,而不能叫做事件类.
 * 因为很多具体的事件都可以使用本类型传递参数.
 */
class OrderEventArgs extends Event
{
    private string $orderNumber = "";

    public function __construct($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }
}