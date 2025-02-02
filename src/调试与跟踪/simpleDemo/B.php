<?php
/**
 * @file   : B.php
 * @time   : 14:28
 * @date   : 2022/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\调试与跟踪\simpleDemo;

class B
{
    public static function Bar(): string
    {
        $a = A::Foo();
        return "B::Bar/" . $a;
    }
}
