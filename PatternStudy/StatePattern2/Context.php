<?php
/**
 * @file   : Context.php
 * @time   : 18:03
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

class Context
{
    //定义一个当前电梯状态
    private LiftState $liftState;

    public function getLiftState(): LiftState
    {
        return $this->liftState;
    }

    public function setLiftState(LiftState $liftState)
    {
        $this->liftState = $liftState;
        // //通知到各个实现类中
        $this->liftState->setContext($this);
    }

    public function open()
    {
        // ConsoleHelper::echoLine("Context.open");
        $this->liftState->open();
    }

    public function close()
    {
        $this->liftState->close();
    }

    public function run()
    {
        $this->liftState->run();
    }

    public function stop()
    {
        $this->liftState->stop();
    }
}