<?php
/**
 * @file   : A.php
 * @time   : 14:28
 * @date   : 2022/2/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\调试与跟踪\simpleDemo;

class A
{
    public static function Foo(): string
    {
        $backtrace = debug_backtrace();
        var_dump(">>>以下是调用堆栈：");
        var_dump($backtrace);

        $files = get_included_files();
        var_dump(">>>以下是已加载的文件列表：");
        var_dump($files);
        return "A::Foo";
    }
}
