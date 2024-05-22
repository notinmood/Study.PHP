<?php
/**
 * @file   : RunningState.php
 * @time   : 18:17
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

use Hiland\Utils\IO\ConsoleHelper;

class RunningState extends LiftState
{

    //运行时不能开门
    public function open()
    {
        //什么都不做
    }

    //运行时门肯定是关的
    public function close()
    {
        //什么都不做
    }

    // * 执行运行方法
    public function run()
    {
        ConsoleHelper::echoLine("电梯运行中");
    }

    //运行后可以停止
    public function stop()
    {
        //环境设置为停止状态
        $this->context->setLiftState(new StoppingState());
        $this->context->getLiftState()->stop();
    }

}