<?php
/**
 * @file   : Person.php
 * @time   : 17:33
 * @date   : 2021/8/14
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\Builder02;

class Person
{
    //固定不变的对象，一般变量需要声明为 final
    private string $mName;     //必选，final 类型需要在 构造器中初始化，不允许不初始化它的构造器存在
    private string $mLocation;       //可选
    private string $mJob;            //可选
    private string $mHabit;          //可选

    /**
     * 构造方法的参数是它的 静态内部类，使用静态内部类的变量一一赋值
     * @param PersonBuilder
     */
    public function __construct(PersonBuilder $builder)
    {
        $this->mName = $builder->mName;
        $this->mLocation = $builder->mLocation;
        $this->mJob = $builder->mJob;
        $this->mHabit = $builder->mHabit;
    }
}
