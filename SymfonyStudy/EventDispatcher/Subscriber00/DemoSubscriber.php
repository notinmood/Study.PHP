<?php
/**
 * @file   : DemoSubscriber.php
 * @time   : 17:08
 * @date   : 2021/10/1
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\EventDispatcher\Subscriber00;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DemoSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            DemoEvent::NAME => 'onDemoEvent',
        );
    }

    public function onDemoEvent(DemoEvent $event)
    {
        // fetch event information here
        echo "DemoListener is called!\n";
        echo "The value of the foo is :".$event->getFoo()."\n";
    }
}