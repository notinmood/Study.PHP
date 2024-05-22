<?php
/**
 * @file   : DBBiz.php
 * @time   : 9:49
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Listener01;

use Hiland\Utils\Environment\EnvHelper;
use Hiland\Utils\IO\ConsoleHelper;

/**
 * 数据库系统存储业务数据的逻辑
 */
class DBBiz
{
    public static function save(OrderEvent $event)
    {
        $orderNumber = $event->getOrderNumber();
        ConsoleHelper::el("DDD.订单{$orderNumber}已经保存在数据库中了!");
    }
}