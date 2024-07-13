<?php
/**
 * @file   : BuilderPerson.php
 * @time   : 15:49
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\PatternStudy\Builder01;

abstract class BuilderPerson
{
    public Person $person;

    public function __construct()
    {
        $this->person = new Person();
    }

    abstract public function buildHead();

    abstract public function buildBody();

    abstract public function buildLeftArm();

    abstract public function buildRightArm();

    abstract public function buildLeftLeg();

    abstract public function buildRightLeg();
}
