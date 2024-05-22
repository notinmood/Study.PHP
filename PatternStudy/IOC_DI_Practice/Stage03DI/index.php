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
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage03DI\Bar;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage03DI\Bim;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage03DI\Foo;

require "../../../vendor/autoload.php";

/**
 *Foo Bar等不在内部创建被依赖的对象了(Stage01Traditional方法),
 *       也不用通过构造器(或者其他setter方法或属性)置入被依赖对象了(Stage02IOC)
 * 现在,Foo Bar依赖某个接口,可以在客户端中给其置入实现该接口的对象实例.
 */
$bim = new Bim();
$bar = new Bar($bim);
$foo = new Foo($bar);
$foo->display();

ConsoleHelper::echoLine("────────────────────────");
/**
 * 因为为Foo依赖的是CanDisplay,那么在客户端可以为其置入任何实现了该接口的对象实例.
 * 比如,可以把Bim的实例bim直接置入Foo中
 */
$bim = new Bim();
$foo = new Foo($bim);
$foo->display();