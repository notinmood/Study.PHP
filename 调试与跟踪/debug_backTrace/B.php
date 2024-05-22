<?php
/**
 * @file   : B.php
 * @time   : 14:28
 * @date   : 2022/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\调试与跟踪\debug_backTrace;

class B
{
    public static function Bar(): string
    {
        $a = A::Foo();

        return "B::Bar" . $a;
    }
}