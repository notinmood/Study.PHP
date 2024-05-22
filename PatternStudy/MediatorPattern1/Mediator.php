<?php
/**
 * @file   : Mediator.php
 * @time   : 17:02
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\MediatorPattern1;

abstract class Mediator
{
    public abstract function register(Colleague $colleague);
    public abstract function relay(Colleague $colleague); //转发
}