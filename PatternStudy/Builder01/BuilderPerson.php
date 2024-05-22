<?php
/**
 * @file   : BuilderPerson.php
 * @time   : 15:49
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Builder01;

abstract class BuilderPerson
{
    public Person $person;

    public function __construct()
    {
        $this->person = new Person();
    }

    public abstract function buildHead();

    public abstract function buildBody();

    public abstract function buildLeftArm();

    public abstract function buildRightArm();

    public abstract function buildLeftLeg();

    public abstract function buildRightLeg();


}