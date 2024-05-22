<?php
/**
 * @file   : ConcreteColleague2.php
 * @time   : 17:20
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\MediatorPattern1;

class ConcreteColleague2 extends Colleague
{
    public function receive()
    {
        echo("具体同事类2收到请求。");
    }

    public function send()
    {
        echo("具体同事类2发出请求。");
        $this->mediator->relay($this); //请中介者转发
    }
}