<?php
/**
 * @file   : Order.php
 * @time   : 9:38
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01;

use Hiland\Utils\IO\ConsoleHelper;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Order
{
    public static string $orderBeforeCreateEvent= "order.beforeCreate";
    public static string $orderAfterCreateCreateEvent= "order.afterCreate";

    public ?OrderEventArgs $orderEventArgs = null;

    private ?EventDispatcher $dispatcher = null;

    private string $orderNumber = "";

    public function __construct($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        $this->orderEventArgs = new OrderEventArgs($orderNumber);
    }

    public function createOrder()
    {
        $this->dispatcher->dispatch($this->orderEventArgs, self::$orderBeforeCreateEvent);

        if ($this->orderEventArgs->isPropagationStopped() == false) {
            ConsoleHelper::el("订单{$this->orderNumber}被创建ing");
            $this->dispatcher->dispatch($this->orderEventArgs, self::$orderAfterCreateCreateEvent);
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