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
 * bind的第二个参数为 null 还是 object，取决于第一个闭包是否用到了 $this 的上下文环境。绑定的对象决定了函数中的 $this 的取值。
 */
class FooClass
{
    public int $pFoo = 3;
}

$cc = function () {
    return $this->pFoo;
};

$aaa       = new FooClass();
$bbb       = new FooClass();
$bbb->pFoo = 5;

//$cc中用到了$this,必须有$this的上下文环境
$bcl2 = Closure::bind($cc, $aaa);
echo $bcl2() . PHP_EOL;    //3

//将闭包绑定到不同的对象实例上,得到不同的值
$bcl2 = Closure::bind($cc, $bbb);
echo $bcl2() . PHP_EOL;    //5

// //以下做法就会出现错误
// $bcl3=Closure::bind($cc,null);
// echo $bcl3();  //fatal error using $this when not in obj context