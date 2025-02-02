<?php
/**
 * @file   : Student.php
 * @time   : 上午9:58
 * @date   : 2024/7/18
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\ContainerInterfaceStudy;

use PHPStudy\ContainerInterfaceStudy\Person;

class Student extends Person
{
    private Person $component;

    public function __construct(Person $person)
    {
        $this->component = $person;
    }

    public function showEating()
    {
        print "Student is eating";
        return $this->component->eat();
    }
}
