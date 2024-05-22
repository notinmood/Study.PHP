<?php
/**
 * @file   : PlatinumMemeberState.php
 * @time   : 10:04
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;

class PlatinumMemberState implements IState
{
    public function discount(Member $member): float
    {
        if ($member->getScore() >= 1000) {
            return 0.80;
        } else {
            //1、代码上,以下写法是可以实现同样功能效果的.
            // 但类似于职责链模式(真正的职责链的每个处理器中,是不清楚下个处理器具体是谁的.流程的配置是在客户端内完成的),
            // 不是状态机模式
            // return (new GoldMemberState())-> discount($member);

            //2、为环境切换状态后,重新让环境去执行目标方法。
            $member->setState(new GoldMemberState());
            return $member->getDiscount();
        }
    }
}