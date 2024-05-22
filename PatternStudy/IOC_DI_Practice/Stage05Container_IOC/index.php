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
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC\Bar;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC\Bim;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC\Container;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC\Foo;

require "../../../vendor/autoload.php";

/**
 * 创建完成对象,放入容器内
 * 需要使用对象的时候,从容器内取
 */

$container = new Container();
$container::bind('bim', function () {
    return new Bim();
});
$container::bind('bar', function () use ($container) {
    return new Bar($container::make('bim'));
});
$container::bind('foo', function () use ($container) {
    return new Foo($container::make('bar'));
});


// 从容器中取得Foo
$foo = $container::make('foo');
$foo->display();
