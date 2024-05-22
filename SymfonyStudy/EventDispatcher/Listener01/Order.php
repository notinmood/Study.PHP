<?php
/**
 * @file   : Order.php
 * @time   : 9:38
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Listener01;

use Hiland\Utils\IO\ConsoleHelper;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Order
{
    private ?EventDispatcher $dispatcher = null;

    private string $orderNumber = "";

    public function __construct($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function createOrder()
    {
        $event = new OrderEvent($this->orderNumber);
        $this->dispatcher->dispatch($event, "order.beforeCreate");

        if ($event->isPropagationStopped() == false) {
            ConsoleHelper::el("订单{$this->orderNumber}被创建ing");
            $this->dispatcher->dispatch($event, "order.afterCreate");
        }
    }

    /**
     * @param EventDispatcher $dispatcher
     */
    public function setDispatcher(EventDispatcher $dispatcher): void
    {
        $this->dispatcher = $dispatcher;
    }
}