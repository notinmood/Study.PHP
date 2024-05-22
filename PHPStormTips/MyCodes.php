<?php
/**
 * @file   : MyCodes.php
 * @time   : 16:29
 * @date   : 2021/10/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PHPStormTips;

/**
 * 因为设置了ins的代码"实时模板",当输入完"ins"再按tab的时候,
 * 就会自动插入如下生成单例的代码逻辑
 */
class MyCodes
{
    //──ins再按Tab生成代码开始(以下代码是,通过输入ins再按Tab自动生成的)──────────────────────
    private static $_instance = null;

    private function __construct()
    {
        //do nothing;
    }

    public static function Instance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
    //───ins再按Tab生成代码结束───────────────────────────────────────────────────────────
}