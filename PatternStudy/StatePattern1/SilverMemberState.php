<?php
/**
 * @file   : SilverMemberState.php
 * @time   : 10:05
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;

class SilverMemberState implements IState
{
    public function discount(Member $member): float
    {
        if ($member->getScore() >= 500) {
            return 0.90;
        } else {
            $member->setState(new GeneralMemberState());
            return $member->getDiscount();
        }
    }
}