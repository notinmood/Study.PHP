<?php
/**
 * @file   : Container.php
 * @time   : 12:00
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC;


class Container
{
    protected static array $registry = [];

    /**
     * 将名称和目标对象放入容器中
     * @param          $name
     * @param callable $resolver 放入的是一个可调用对象(比如函数、匿名函数.这个可调用对象执行后返回真实的目标对象)
     */
    public static function bind($name, Callable $resolver)
    {
        static::$registry[$name] = $resolver;
    }

    /**
     * 通过名称从容器内取出目标对象
     * @param $name
     * @return mixed
     */
    public static function make($name)
    {
        if (isset(static::$registry[$name])) {
            $resolver = static::$registry[$name];
            return $resolver();
        }
        throw new Exception('Alias does not exist in the IoC registry.');
    }
}