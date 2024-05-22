<?php
/**
 * @file   : IState.php
 * @time   : 9:51
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\StatePattern1;

//状态接口
interface IState
{
    public function discount(Member $member): float;
}