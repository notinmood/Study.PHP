<?php
/**
 * @file   : Colleague.php
 * @time   : 17:04
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\MediatorPattern1;

/**
 * 抽象同事类
 */
abstract class Colleague
{
    protected Mediator $mediator;

    public function setMedium(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public abstract function receive();

    public abstract function send();
}