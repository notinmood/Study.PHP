<?php
/**
 * @file   : index.php
 * @time   : 19:45
 * @date   : 2021/9/30
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\SymfonyStudy\Container_DI\Card;
use PHP\Study\SymfonyStudy\Container_DI\Mail;
use PHP\Study\SymfonyStudy\Container_DI\Poster;
use PHP\Study\SymfonyStudy\Container_DI\Student;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

require "../../vendor/autoload.php";

$container = new ContainerBuilder();

/**
 * 1、注册带参数的构造器的类型(addArgument的使用)
 */
$itemID = "mailer";
$container
    ->register("$itemID", Mail::class)
    ->addArgument('发送人小S')
    ->addArgument('接受人C');
$mailer = $container->get("$itemID");
/**
 * 加入if($a instanceof AA)这一行判断,
 * 是为了在$a上调用方法的时候能有智能提示.
 */
if ($mailer instanceof Mail) {
    echo $mailer->toString();
}
echo PHP_EOL;


$itemID = "card";
$container
    ->register("$itemID", Card::class)
    ->addArgument('发送人JACK')
    ->addArgument('接受人ROSE');
$mailer = $container->get("$itemID");
if ($mailer instanceof Card) {
    echo $mailer->toString();
}

echo PHP_EOL;

/**
 * 2、注册类型,并调用其方法(addMethodCall的使用)
 */
$itemID = "student";
$container
    ->register($itemID, Student::class)
    ->addArgument("张三")
    ->addArgument(20)
    ->addMethodCall("setName", ["李四"]);

$student = $container->get($itemID);
if ($student instanceof Student) {
    echo $student->getName();
}

echo PHP_EOL;

/**
 * 3、将一个容器内的类型(实例)作为容器这种另外一个类型的参数,
 * 或者说容器内的一个类型依赖于容器内的另外一个类型.
 */
$itemID = "poster";

/**
 * 以下两条可以切换
 */
$referenceID = "mailer";
// $referenceID = "card";

$container->register($itemID,Poster::class)
    ->addArgument(new Reference($referenceID));

$poster = $container->get($itemID);
if ($poster instanceof Poster) {
    echo $poster->Post();
}


