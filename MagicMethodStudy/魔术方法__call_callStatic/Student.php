<?php
/**
 * @file   : Student.php
 * @time   : 16:50
 * @date   : 2021/10/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\MagicMethodStudy\魔术方法__call_callStatic;

/**
 * @method string welcomeName()
 * @method static string getFoo()
 */
class Student
{
    private string $name = "";
    private int    $age  = 20;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function getMyName(): string
    {
        return $this->name;
    }

    private function getFullName(): string
    {
        return "学生的名字为：" . $this->name;
    }

    public function __call($name, $arguments)
    {
        el("正在通过魔术方法 __call(),调用方法 $name");

        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        } else {
            el("NNN- 方法{$name}不存在的");
        }
    }

    public static function __callStatic($name, $arguments)
    {
        return "正在访问一个没有定义的静态方法$name";
    }
}