<?php
/**
 * @file   : OpeningState.php
 * @time   : 18:07
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

use Hiland\Utils\IO\ConsoleHelper;

class OpeningState extends LiftState
{

    //执行打开电梯门方法
    public function open()
    {
        ConsoleHelper::echoLine("电梯门开启");
    }

    //打开后还可以关闭电梯门
    public function close()
    {
        //状态修改
        $this->context->setLiftState(new ClosingState());
        //动作委托为CLOSING_STATE执行
        $this->context->getLiftState()->close();
    }

    //门开着不能运行
    public function run()
    {
        //什么都不做
    }

    //门开着已经停止了
    public function stop()
    {
        //什么都不做
    }

}