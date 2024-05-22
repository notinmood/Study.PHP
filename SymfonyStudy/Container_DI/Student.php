<?php
/**
 * @file   : Student.php
 * @time   : 20:14
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\SymfonyStudy\Container_DI;

class Student
{
    private $age;
    private $name;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}