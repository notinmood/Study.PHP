<?php
/**
 * @file   : StoppingState.php
 * @time   : 18:18
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

use Hiland\Utils\IO\ConsoleHelper;

class StoppingState extends LiftState
{

    //停下了要开门
    public function open()
    {
        $this->context->setLiftState(new OpeningState());
        $this->context->getLiftState()->open();
    }

    //门本来就是关着的
    public function close()
    {
        //什么都不做
    }

    //停止后可以再运行
    public function run()
    {
        $this->context->setLiftState(new RunningState());
        $this->context->getLiftState()->run();
    }

    //执行停止方法
    public function stop()
    {
        ConsoleHelper::echoLine("电梯停止了");
    }

}