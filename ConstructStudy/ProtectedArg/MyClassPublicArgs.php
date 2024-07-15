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

class MyClassPublicArgs
{
    public function __construct(public string $name)
    {
        // do something here
    }

    public function getName(): string
    {
        return $this->name;
    }
}
