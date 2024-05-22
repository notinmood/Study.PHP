<?php
/**
 * @file   : index.php
 * @time   : 9:54
 * @date   : 2021/8/10
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */
require "../vendor/autoload.php";

use Hiland\Utils\Data\BoolHelper;
use Hiland\Utils\IO\ConsoleHelper;
use PHP\Study\ExistStudy\MyClass;

/**
 *
 */
$myClass = new MyClass();

const MY_CITY = "Qingdao";

/**
 * 这种语法不再推荐使用了,请使用const语法
 */
define("MY_JOB", "IT ENGINEER");

/**
 * @param bool   $exist
 * @param string $targetName
 * @param string $targetType
 */
function displayInfo(bool $exist, string $targetName, string $targetType = ""): void
{
    $exist = BoolHelper::getText($exist);
    ConsoleHelper::echoLine("存在性:{$exist} - 类型:{$targetType} - 名称:{$targetName}");
}


//1.0、 //判断类型的时候,要使用带命名空间的全名称,否则找不到
$class = "MyClass";
$exist = class_exists($class);
displayInfo($exist, $class, "类型");

//1.1、
$class = "PHP\Study\ExistStudy\MyClass";
$exist = class_exists($class);
displayInfo($exist, $class, "类型");

//1.2、
$class = MyClass::class;
$exist = class_exists($class);
displayInfo($exist, $class, "类型");

//2.1、
$functionName = "SayHi"; //这是一个定义在Common/helper.php内的函数
$exist = function_exists($functionName);
displayInfo($exist, $functionName, "函数");

//2.2
$functionName = "SayHello"; //没有定义这样的方法,应该返回false
$exist = function_exists($functionName);
displayInfo($exist, $functionName, "函数");


//3.1
$methodName = "myMethod";
$exist = method_exists($myClass, $methodName);
displayInfo($exist, $methodName, "方法");

//3.2
$methodName = "myMethod2";
$exist = method_exists($myClass, $methodName);
displayInfo($exist, $methodName, "方法");

//4.1.1 给property_exists的第一个参数传递 类型的实例
$propertyName = "myProperty";
$exist = property_exists($myClass, $propertyName);
displayInfo($exist, $propertyName, "属性");

//4.1.2 给property_exists的第一个参数传递 类型全名称(字符串类型)
$propertyName = "myProperty";
$exist = property_exists(MyClass::class, $propertyName);
displayInfo($exist, $propertyName, "属性");

//4.2
$propertyName = "myProperty2";
$exist = property_exists($myClass, $propertyName);
displayInfo($exist, $propertyName, "属性");

//5.1.1
$constName = "MY_CITY";
$exist = defined($constName);
displayInfo($exist, $constName, "常量定义");

//5.1.2
$constName = "MY_JOB";
$exist = defined($constName);
displayInfo($exist, $constName, "常量定义");

//5.1.3
$constName = "MY_JOB2";
$exist = defined($constName);
displayInfo($exist, $constName, "常量定义");

//5.1.1
$varName = 123;
$exist = defined($varName);
displayInfo($exist, $varName, "变量定义");

//5.2.2
$exist = defined("mySchool");
displayInfo($exist, "mySchool", "变量定义");

//6.1.1
$varName = "MY_JOB2";
$exist = isset($varName);
displayInfo($exist, $varName, "赋值");

//6.1.2
unset($varName);
$exist = isset($varName);
displayInfo($exist, "(经过unset的变量)", "赋值");

//6.2.1
$arr= [2];
$exist = isset($arr[0]);
displayInfo($exist, "数组元素", "赋值");

//6.2.2
$exist = isset($arr[1]);
displayInfo($exist, "数组元素", "赋值");

