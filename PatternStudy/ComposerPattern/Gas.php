<?php
/**
 * @file: Gas.php
 * @time: 15:58
 * @date: 2021/8/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ComposerPattern;

/**
 *
 */
class Gas implements IEngine
{
    /**
     * @return string
     */
    public function power():string
    {
        return "汽油";
    }
}