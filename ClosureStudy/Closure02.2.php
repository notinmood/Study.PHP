<?php
/**
 * @file   : Closure00.php
 * @time   : 15:47
 * @date   : 2021/8/12
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 本文件演示的是,通过第三个参数,将闭包函数注入到类型内部,访问类型的静态成员
 */
class BarClass
{
    private static int $sFoo = 100;
}

/**
 * 静态闭包函数
 * @return int
 */
$cfs = static function () {
    return BarClass::$sFoo;
};

/**
 * 实例闭包函数
 * @return int
 */
$cfe = function () {
    return BarClass::$sFoo;
};


//这段代码可以正常执行.是因为以下代码把 $cl1 放入A类型内部了.在类型内部调用private的变量当然可以.
$vcf = Closure::bind($cfs, null, 'BarClass');
echo $vcf() . PHP_EOL;

$barObject = new BarClass();
$vcf       = Closure::bind($cfs, null, $barObject);
echo $vcf() . PHP_EOL;

$vcf = Closure::bind($cfs, null, new BarClass);
echo $vcf() . PHP_EOL;

$vcf = Closure::bind($cfe, null, BarClass::class);
echo $vcf() . PHP_EOL;