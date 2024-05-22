<?php
/**
 * @file   : SecuerityHelper.php
 * @time   : 10:21
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01;

use Hiland\Utils\Data\ObjectHelper;
use Hiland\Utils\IO\ConsoleHelper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class SecurityHelper implements EventSubscriberInterface
{
    /**
     * @return mixed
     */
    public static function getSubscribedEvents()
    {
        $eventName= Order::$orderBeforeCreateEvent;
        $result[$eventName] = "validate";

        return $result;
    }


    public static function validate(OrderEventArgs $event)
    {
        $orderNumber = $event->getOrderNumber();
        $length = ObjectHelper::getLength($orderNumber);
        if ($length != 11) {
            ConsoleHelper::el("订单单号($orderNumber)不对,请确认!");
            $event->stopPropagation();
        } else {
            ConsoleHelper::el("订单($orderNumber)验证通过!");
        }
    }
}