<?php
/**
 * @file   : CollegeStudent.php
 * @time   : 8:56
 * @date   : 2022/1/24
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\KeyWordStudy\self_parent_this;

use PHP\Study\_res\Student;

class CollegeStudent extends Student
{
    public function work($workType): string
    {
        return "我将要参加的工作是" . $workType;
    }

    public static function makeFriends(): string
    {
        return ("我们是成年人，可以谈朋友了！");
    }

    /**
     * 1. 关键字 $this 可以调用基类的实例方法
     * @return void
     */
    public function echoAgeWithThis()
    {
        echo $this->getAge();
    }

    /**
     * 2. 关键字 $this 可以调用本类的实例方法
     * @return void
     */
    public function echoNameWithThis()
    {
        echo $this->getName();
    }

    /**
     * 3. 关键字 self 可以调用本类的实例方法
     * @return void
     */
    public function echoWork()
    {
        echo self::work("IT Engineer");
    }

    /**
     * 4. 关键字 self 可以调用本类的静态方法
     * @return void
     */
    public function echoMakeFriends()
    {
        echo self::makeFriends();
    }

    /**
     * 5. 关键字 self 可以调用基类的实例方法
     * @return string
     */
    public function echoAgeWithSelf(): string
    {
        return "我是大学生" . self::getAge();
    }

    /**
     * 6. 关键字 self 可以调用基类的静态方法
     * @return void
     */
    public function echoWalkWithSelf()
    {
        echo self::Walk();
    }

    /**
     * 7. 关键字 parent 可以调用基类的实例方法
     * @return string
     */
    public function getName(): string
    {
        return "我是大学生" . parent::getName();
    }

    /**
     * 8. 关键字 parent 可以调用基类的静态方法
     * @return void
     */
    public function echoWalk()
    {
        echo parent::Walk();
    }
}