<?php
/**
 * @file   : DisplayNullable.php
 * @time   : 11:35
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic;

class DisplayNullable implements CanDisplay
{
    private static  $instance = null;

    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new DisplayNullable();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    /**
     * @return void
     */
    public function display()
    {
        // do nothing;
    }
}