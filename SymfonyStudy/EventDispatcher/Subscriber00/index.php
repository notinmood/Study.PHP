<?php
/**
 * @file   : index.php
 * @time   : 16:28
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../../vendor/autoload.php";

use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber00\DemoEvent;
use PHP\Study\SymfonyStudy\EventDispatcher\Subscriber00\DemoSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;


// init event dispatcher
$dispatcher = new EventDispatcher();

// register subscriber
$subscriber = new DemoSubscriber();
$dispatcher->addSubscriber($subscriber);

// dispatch
$dispatcher->dispatch(new DemoEvent(), DemoEvent::NAME);