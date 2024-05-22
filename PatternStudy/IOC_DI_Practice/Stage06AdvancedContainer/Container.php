<?php
/**
 * @file   : Container.php
 * @time   : 14:38
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage06AdvancedContainer;

use ReflectionClass;
use ReflectionException;

class Container
{
    protected static array $_fixedObjectArray = [];

    // 添加一个实例到单例
    public static function addFixedInstance($instance)
    {
        if (!is_object($instance)) {
            throw new InvalidArgumentException("Object need!");
        }

        $class_name = get_class($instance);
        // singleton not exist, create
        if (!array_key_exists($class_name, self::$_fixedObjectArray)) {
            self::$_fixedObjectArray[$class_name] = $instance;
        }
    }

    // 获取一个单例实例
    public static function getFixedInstance($classFullName)
    {
        return array_key_exists($classFullName, self::$_fixedObjectArray) ?
            self::$_fixedObjectArray[$classFullName] : NULL;
    }

    // 销毁一个单例实例
    public static function removeFixedInstance($classFullName)
    {
        self::$_fixedObjectArray[$classFullName] = NULL;
    }


    // 改造 getInstance 方法
    public static function getDynamicInstance($classFullName, $params = [])
    {
        // 如果是匿名函数（Anonymous functions），也叫闭包函数（closures）
        if ($classFullName instanceof \Closure) {
            // 执行闭包函数，并将结果
            return $classFullName();
        }

        $reflector = null;
        // 获取反射实例
        try {
            $reflector = new ReflectionClass($classFullName);
        } catch (ReflectionException $e) {
        }

        // 获取反射实例的构造方法
        $constructor = $reflector->getConstructor();

        $di_params = [];
        if ($constructor) {
            // 获取反射实例构造方法的形参
            foreach ($constructor->getParameters() as $param) {
                $class = $param->getClass();
                if ($class) {
                    // 如果依赖是单例，则直接获取，反之创建实例
                    $singleton = self::getFixedInstance($class->name);
                    $di_params[] = $singleton ? $singleton : self::getDynamicInstance($class->name);
                }
            }
        }

        $di_params = array_merge($di_params, $params);
        // 创建实例
        return $reflector->newInstanceArgs($di_params);
    }

    //增加 run 方法

    /**
     * 直接运行对象实例的方法
     * @param string $classFullName
     * @param string $method
     * @param array  $params
     * @param array  $construct_params
     * @return false|mixed
     * @throws ReflectionException
     */
    public static function run(string $classFullName,string $method, array $params = [], array $construct_params = [])
    {
        if (!class_exists($classFullName)) {
            throw new BadMethodCallException("Class $classFullName is not found!");
        }

        if (!method_exists($classFullName, $method)) {
            throw new BadMethodCallException("undefined method $method in $classFullName !");
        }
        // 获取外层实例 new $class_name
        $instance = self::getDynamicInstance($classFullName, $construct_params);

        //以下是为了获取 $method 方法的参数

        // 通过反射实例，获取 $class_name 类的相关方法和属性等
        $reflector = new \ReflectionClass($classFullName);
        // 获取方法
        $reflectorMethod = $reflector->getMethod($method);

        $di_params = [];

        // 查找方法的形参 $method
        foreach ($reflectorMethod->getParameters() as $param) {
            $class = $param->getClass(); // 如果类，则实例
            if ($class) {
                $singleton = self::getFixedInstance($class->name);
                $di_params[] = $singleton ? $singleton : self::getDynamicInstance($class->name);
            }
        }

        // 运行方法
        return call_user_func_array([$instance, $method], array_merge($di_params, $params));
    }
}