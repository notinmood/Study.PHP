<?php
/**
 * @file   : GoldMemberState.php
 * @time   : 10:04
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;

class GoldMemberState implements IState
{
    public function discount(Member $member): float
    {
        if ($member->getScore() >= 800) {
            return 0.85;
        } else {
            $member->setState(new SilverMemberState());
            return $member->getDiscount();
        }
    }
}