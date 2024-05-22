<?php
/**
 * @file   : index.php
 * @time   : 17:04
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use PHP\Study\PatternStudy\MediatorPattern1\ConcreteColleague1;
use PHP\Study\PatternStudy\MediatorPattern1\ConcreteColleague2;
use PHP\Study\PatternStudy\MediatorPattern1\ConcreteMediator;

$md = new ConcreteMediator();

$c1 = new ConcreteColleague1();
$c2 = new ConcreteColleague2();

$md->register($c1);
$md->register($c2);
$c1->send();
echo(PHP_EOL);
$c2->send();



