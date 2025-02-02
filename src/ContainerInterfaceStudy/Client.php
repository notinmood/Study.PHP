<?php
/**
* @file   : Container.php
* @time   : 上午9:20
* @date   : 2024/7/18
* @mail   : 9727005@qq.com
* @creator: ShanDong Xiedali
* @company: HiLand & RainyTop
*/

namespace PHPStudy\ContainerInterfaceStudy;

require "../../vendor/autoload.php";


$container = new Container();

$person = $container->get(Person::class);

echo $person->eat();

$student = $container->get(Student::class);

echo $student->showEating();
