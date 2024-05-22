<?php
/**
 * @file   : B.php
 * @time   : 16:09
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage06AdvancedContainer;

class B
{
    public function getCount(A $a, $count): int
    {
        return $a->count + $count;
    }
}