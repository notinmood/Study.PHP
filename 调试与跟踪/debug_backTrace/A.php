<?php
/**
 * @file   : A.php
 * @time   : 14:28
 * @date   : 2022/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\调试与跟踪\debug_backTrace;

class A
{
    public static function Foo(): string
    {
        $aa= debug_backtrace();
        dump($aa);
        return "A::Foo";
    }
}