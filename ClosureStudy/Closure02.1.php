<?php
/**
 * @file   : Closure02.1.php
 * @time   : 17:00
 * @date   : 2021/8/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

class MyClass
{
    public string  $publicData  = "[public] i am public data!";
    private string $privateData = "[private] i am private data!";
}

$myObject = new MyClass();

$cfPrivate = function () {
    return $this->privateData;
};

$cfPublic = function () {
    return $this->publicData;
};

//访问私有成员,必须通过第三个参数,将本闭包方法"注入"到这个类型内部.
$privateMember = Closure::bind($cfPrivate, $myObject, "A");
echo $privateMember() . PHP_EOL;

$privateMember = Closure::bind($cfPrivate, $myObject, $myObject);
echo $privateMember() . PHP_EOL;

$privateMember = Closure::bind($cfPrivate, $myObject, MyClass::class);
echo $privateMember() . PHP_EOL;

//访问公有成员,就不必使用第三个参数将本闭包方法注入进入类型内部了.
$publicMember = Closure::bind($cfPublic, $myObject);
echo $publicMember() . PHP_EOL;
