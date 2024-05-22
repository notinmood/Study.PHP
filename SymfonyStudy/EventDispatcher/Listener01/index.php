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
use PHP\Study\SymfonyStudy\EventDispatcher\Listener01\DBBiz;
use PHP\Study\SymfonyStudy\EventDispatcher\Listener01\FileBiz;
use PHP\Study\SymfonyStudy\EventDispatcher\Listener01\Order;
use PHP\Study\SymfonyStudy\EventDispatcher\Listener01\SecurityHelper;
use Symfony\Component\EventDispatcher\EventDispatcher;

require "../../../vendor/autoload.php";

$dispatcher = new EventDispatcher();
$dispatcher->addListener("order.afterCreate", [DBBiz::class, "save"]);
$dispatcher->addListener("order.afterCreate", [new FileBiz(), "save"], 100);
$dispatcher->addListener("order.beforeCreate", [SecurityHelper::class, "validate"]);

$order = new Order("1357329034");
$order->setDispatcher($dispatcher);
$order->createOrder();

ConsoleHelper::el("════════════════════════");

$order = new Order("13573290346");
$order->setDispatcher($dispatcher);
$order->createOrder();
