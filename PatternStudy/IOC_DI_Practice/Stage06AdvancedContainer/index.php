<?php
/**
 * @file   : index.php
 * @time   : 16:08
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../../vendor/autoload.php";

use PHP\Study\PatternStudy\IOC_DI_Practice\Stage06AdvancedContainer\B;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage06AdvancedContainer\Container;

$result = Container::run(B::class, 'getCount', [10]);
var_dump($result); // result is 20