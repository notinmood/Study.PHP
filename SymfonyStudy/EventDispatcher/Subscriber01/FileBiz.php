<?php
/**
 * @file   : FileBiz.php
 * @time   : 9:50
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01;

use Hiland\Utils\IO\ConsoleHelper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * 文件系统存储业务数据的逻辑
 */
class FileBiz implements EventSubscriberInterface
{
    public function save(OrderEventArgs $event)
    {
        $orderNumber = $event->getOrderNumber();
        ConsoleHelper::el("FFF.订单{$orderNumber}已经保存在文件系统中了!");
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