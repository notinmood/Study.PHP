<?php
/**
 * @file   : MyClass.php
 * @time   : 上午9:11
 * @date   : 2024/7/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\VirtualMemberStudy;

/**
 * @property string $Foo
 * @method static string getBar(string $someData)
 */
class MyClassWithMagicGet
{
    private array $data = [];

    public function __isset($name): bool
    {
        return isset($this->$name);
    }

    public function __set($name, $value)
    {
        // do something with $value
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Magic get called for $name";
        el();
        return $this->data[$name]?? null;
    }
}
