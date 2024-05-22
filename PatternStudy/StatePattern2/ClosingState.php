<?php
/**
 * @file   : ClosingState.php
 * @time   : 18:16
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern2;

use Hiland\Utils\IO\ConsoleHelper;
use phpDocumentor\Reflection\Types\This;

class ClosingState extends LiftState
{

    //电梯门关了可以再开
    public function open()
    {
        // ConsoleHelper::echoLine("ClosingState.open");
        //置为敞门状态
        $this->context->setLiftState(new OpeningState());
        // ConsoleHelper::echoLine("ClosingState.open");
        $this->context->getLiftState()->open();
    }

    // 执行电梯门关闭方法
    public function close()
    {
        ConsoleHelper::echoLine("电梯门关闭");
    }

    //电梯门关了就运行
    public function run()
    {
        $this->context->setLiftState(new RunningState());
        $this->context->getLiftState()->run();
    }

    //电梯门关了但没有按楼层
    public function stop()
    {
        $this->context->setLiftState(new StoppingState());
        $this->context->getLiftState()->stop();
    }

}