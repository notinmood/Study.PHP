<?php
/**
 * @file   : DBBiz.php
 * @time   : 9:49
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01;

use Hiland\Utils\IO\ConsoleHelper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * 数据库系统存储业务数据的逻辑
 */
class DBBiz implements EventSubscriberInterface
{
    public static function save(OrderEventArgs $event)
    {
        $orderNumber = $event->getOrderNumber();
        ConsoleHelper::el("DDD.订单{$orderNumber}已经保存在数据库中了!");
    }

    /**
     * @return mixed
     */
    public static function getSubscribedEvents()
    {
        $eventName= Order::$orderAfterCreateCreateEvent;
        $result[$eventName] = "save";
        return $result;
    }
}