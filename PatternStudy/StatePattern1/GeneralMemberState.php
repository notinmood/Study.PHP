<?php
/**
 * @file   : GeneralMemberState.php
 * @time   : 9:53
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;


class GeneralMemberState implements IState
{
    public function discount(Member $member): float
    {
        return 0.95;
    }
}