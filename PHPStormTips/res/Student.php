<?php
/**
 * @file   : Student.php
 * @time   : 22:05
 * @date   : 2021/10/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PHPStormTips\res;

class Student
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;


    public function __construct($name,$age)
    {
        $this->age=$age ;
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }
}