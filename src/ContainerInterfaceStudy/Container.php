<?php
/**
 * @file   : Container.php
 * @time   : 上午9:20
 * @date   : 2024/7/18
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\ContainerInterfaceStudy;

use Psr\Container\ContainerInterface;
use ReflectionClass;
use ReflectionException;

class Container implements ContainerInterface
{
    /**
     * 注册树
     * @var array
     */
    protected array $register;

    /**
     * @throws ReflectionException
     */
    public function get(string $classFullName)
    {
        // 判断当前类是否已注册
        if (isset($this->register[$classFullName])) {
            return $this->register[$classFullName];
        }

        // 反射类
        $reflector = new ReflectionClass($classFullName);

        // 构造函数参数
        $constructorParams = [];

        $constructorMethod= $reflector->getConstructor();
        // 是否需要处理构造函数
        if ($constructorMethod) {
            // 构造函数参数
            $params = $constructorMethod->getParameters();
            if (!empty($params)) {
                foreach ($params as $param) {
                    // 反射参数类
                    $paramReflector = new ReflectionClass($param->getType()->getName());
                    // 参数类名
                    $paramClass = $paramReflector->name;
                    // 递归实例化参数
                    $constructorParams[] = $this->get($paramClass);
                }
            }
        }

        // 实例化类
        if (!empty($constructorParams)) {
            $object= new $classFullName(...$constructorParams);
        } else {
            $object= new $classFullName();
        }

        // 更新注册树
        $this->register[$classFullName] = $object;
        return $object;
    }

    /**
     * @param string $class
     * @return bool
     */
    public function has(string $class): bool
    {
        return isset($this->register[$class]);
    }
}
