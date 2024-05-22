<?php
/**
 * @file   : PersonBuilder.php
 * @time   : 17:38
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Builder02;

class PersonBuilder
{
    /**
     * PersonBuilder 的内部成员，要和 Person 的一致
     */
    public string $mName;     //必选，final 类型需要在 构造器中初始化，不允许不初始化它的构造器存在
    public string $mLocation;       //可选
    public string $mJob;            //可选
    public string $mHabit;          //可选

    /**
     * 含必选参数的构造方法
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->mName = $name;
    }

    public function setLocation(string $location): PersonBuilder
    {
        $this->mLocation = $location;
        return $this;
    }

    public function setJob(string $job): PersonBuilder
    {
        $this->mJob = $job;
        return $this;
    }

    public function setHabit(string $habit): PersonBuilder
    {
        $this->mHabit = $habit;
        return $this;
    }

    /**
     * 最终构建方法，返回一个 PersonTree 对象，参数是当前 PersonBuilder 对象
     * @return Person
     */
    public function build(): Person
    {
        return new Person($this);
    }
}