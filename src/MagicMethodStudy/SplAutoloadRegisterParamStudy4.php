<?php
/**
 * @file   : SplAutoloadRegisterParamStudy3.php
 * @time   : 12:39
 * @date   : 2021/8/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * spl_autoload_register的参数研究
 * 4、通过数组的形式传递已经存在的其他类型和方法的名称,在已经存在的其他类型的方法内进行文件加载
 */
class Loader
{
    public static function load($class)
    {
        echo "在Loader.load内执行。" . PHP_EOL;
        echo("目标类的名称为：{$class}" . PHP_EOL);
        require "./AutoLoadStudy2_entity.php";
    }
}

//方式1、
// spl_autoload_register(array('Loader', 'load'));
//方式2、
spl_autoload_register('Loader::load');

$temp = new MagicMethodStudy\AutoLoadStudy2_entity();