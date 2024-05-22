<?php
/**
 * @file: Battery.php
 * @time: 16:11
 * @date: 2021/8/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ComposerPattern;

class Battery implements IEngine
{
    public function power():string
    {
        return "电池";
    }
}