<?php
/**
 * @file   : index.php
 * @time   : 10:04
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\IO\ConsoleHelper;
use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01\DBBiz;
use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01\FileBiz;
use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01\Order;
use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber01\SecurityHelper;
use Symfony\Component\EventDispatcher\EventDispatcher;

require "../../../vendor/autoload.php";

$dispatcher = new EventDispatcher();

/**
 * 处理方法和事件的关联，是通过addListener的两个参数配合实现的.
 */
// $dispatcher->addListener("order.afterCreate", [DBBiz::class, "save"]);
// $dispatcher->addListener("order.afterCreate", [new FileBiz(), "save"], 100);
// $dispatcher->addListener("order.beforeCreate", [SecurityHelper::class, "validate"]);

/**
 * 处理方法和事件的关联,放入具体的类型内部(DBBiz等),让具体的类型通过实现接口来挂接两者的关系.
 */
$dispatcher->addSubscriber(new DBBiz());
$dispatcher->addSubscriber(new FileBiz());
$dispatcher->addSubscriber(new SecurityHelper());

$orderNumber = "1357329034";
$order = new Order("$orderNumber");
$order->setDispatcher($dispatcher);
$order->createOrder();

ConsoleHelper::el("════════════════════════");

$orderNumber = "13573290346";
$order = new Order("$orderNumber");
$order->setDispatcher($dispatcher);
$order->createOrder();
