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
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic\Bar;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic\Bim;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic\Container;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic\Foo;

require "../../../vendor/autoload.php";

/**
 * 用魔术方法__set和__get实现从容器内存取对象：
 * 创建完成对象,放入容器内
 * 需要使用对象的时候,从容器内取
 */

$container = new Container();
$container->bim = new Bim();
$container->bar = new Bar($container->bim);
$container->foo = new Foo($container->bar);

$container->foo->display();