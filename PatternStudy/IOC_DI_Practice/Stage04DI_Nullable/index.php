<?php
/**
 * @file   : index.php
 * @time   : 10:03
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use Hiland\Utils\IO\ConsoleHelper;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage04DI_Nullable\Bar;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage04DI_Nullable\Bim;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage04DI_Nullable\Foo;

require "../../../vendor/autoload.php";

/**
 * 加入空模式对象之后,在客户端创建依赖对象的时候,更加灵活
 * (注意：正式的空模式应用场景是把nullable对象作为方法的返回值使用;
 * 在其他代码调用在这个方的时候,就不用进行null判断了)
 */
$bim = new Bim();
$bar = new Bar($bim);
$foo = new Foo($bar);
$foo->display();


ConsoleHelper::echoLine("────────────────────────");


$bar = new Bar();
$foo = new Foo($bar);
$foo->display();


ConsoleHelper::echoLine("────────────────────────");


$foo = new Foo();
$foo->display();
