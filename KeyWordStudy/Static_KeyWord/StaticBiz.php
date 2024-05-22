<?php
/**
 * @file   : StaticBiz.php
 * @time   : 7:07
 * @date   : 2021/9/3
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\KeyWordStudy\Static_KeyWord;

class StaticBiz
{
    /**
     * 静态实例
     * @var StaticBiz
     */
    private static $instance;

    /**
     * 实例成员
     * @var string
     */
    public $myName;

    /**
     * @return StaticBiz
     */
    public static function getInstance(): StaticBiz
    {
        //调用静态成员的时候,static的作用和self一样的.
        if (!static::$instance) {
            static::$instance = new static();
        }

        return self::$instance;
    }

}