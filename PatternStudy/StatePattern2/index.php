<?php
/**
 * @file   : index.php
 * @time   : 18:26
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\PatternStudy\StatePattern2\ClosingState;
use PHP\Study\PatternStudy\StatePattern2\Context;

require "../../vendor/autoload.php";

$context = new Context();

//定义初始状态为关门（共四种初始值）
$context->setLiftState(new ClosingState());
$context->open();
$context->close();
$context->run();
$context->stop();