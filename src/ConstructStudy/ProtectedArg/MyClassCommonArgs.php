<?php
/**
 * @file   : MyClass.php
 * @time   : 上午7:10
 * @date   : 2024/7/15
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */
namespace PHPStudy\ConstructStudy\ProtectedArg;

class MyClassCommonArgs
{
    public function __construct(string $name)
    {
        // do something here
    }

    public function getName(): string
    {
        // 以下代码访问不到name属性，因为它不存在。
        // return $this->name;
        return "[[Null]]";
    }
}
