<?php
/**
 * @file   : LiftState.php
 * @time   : 17:45
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

/**
 * 电梯状态类(在某状态下都可以执行什么动作,不可以执行什么动作;
 * 在本抽象类里面把所有的动作都设置为抽象方法)
 */
abstract class LiftState
{

    protected Context $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    //电梯门开启动作
    public abstract function open();

    //电梯门关闭动作
    public abstract function close();

    //电梯运行
    public abstract function run();

    //电梯停止
    public abstract function stop();

}