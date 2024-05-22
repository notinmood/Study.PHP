<?php

namespace PHP\Study\GetCalledClass_GetClass;
/**
 * 说明:
 * get_class 返回的是get_class这行所在类，包含命名空间的类全名称(即便有派生类,这段代码被派生类继承那么返回的也是原生类的全名称)
 * get_called_class 返回的是被调用类的全名称(如果代码写在原生类上,而调用的是派生类,那么返回的就是派生类的全名称)
 *
 * 另外使用__CLASS__的效果跟get_class相同
 */

use Hiland\Utils\IO\ConsoleHelper;


require_once "../vendor/autoload.php";


/**
 * @user: ShanDong Xiedali
 * @date: 2021/8/3
 * @time: 16:17
 * @company: 海澜&润拓
 */


$a = new MyClassA();
$b = new MyClassB();
echo PHP_EOL . "在原生类A的实例中,使用get_called_class " . PHP_EOL;
$a->itCalledClass();
echo PHP_EOL . "在派生类B的实例中,使用get_called_class " . PHP_EOL;
$b->itCalledClass();

echo PHP_EOL . "在原生类A的实例中,使用get_class " . PHP_EOL;
$a->itClass();
echo PHP_EOL . "在派生类B的实例中,使用get_class " . PHP_EOL;
$b->itClass();

echo PHP_EOL . "在原生类A中,使用get_called_class " . PHP_EOL;
MyClassA::stCalledClass();
echo PHP_EOL . "在派生类B中,使用get_called_class " . PHP_EOL;
MyClassB::stCalledClass();

echo PHP_EOL . "在原生类A中,使用get_class " . PHP_EOL;
MyClassA::stClass();
echo PHP_EOL . "在派生类B中,使用get_class " . PHP_EOL;
MyClassB::stClass();

ConsoleHelper::echoLine("在原生类A的实例中,使用__CLASS__ ");
$a->it_Class();
ConsoleHelper::echoLine("在原生类B的实例中,使用__CLASS__ ");
$b->it_Class();