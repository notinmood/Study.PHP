<?php
/**
 * @file   : Student.php
 * @time   : 15:45
 * @date   : 2022/1/27
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\MagicMethodStudy\魔术属性__get_set;
require "../../vendor/autoload.php";

/**
 * @property string $City
 * @property string $School
 * @method string getCity()
 */
class Student
{
    private array $innerArray = [];

    public function __get($name)
    {
        if (array_key_exists($name, $this->innerArray)) {
            return $this->innerArray[$name];
        } else {
            return null;
        }
    }

    public function __set($name, $value)
    {
        $this->innerArray[$name] = $value;
    }

    public function __call($name, $args)
    {
        el("正在调用魔术方法 __call");
        el($name);
        dump($args);
    }
}