<?php
/**
 * @file   : index.php
 * @time   : 10:08
 * @date   : 2021/9/7
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\PatternStudy\StatePattern1\Member;
use PHP\Study\PatternStudy\StatePattern1\PlatinumMemberState;

require "../../vendor/autoload.php";

// 如果不使用状态模式，在Member的discount()方法中，我们可能需要写很多层if...else...判断条件
// 同时，这也带来了方法体会越来越长，越来越难以维护的问题 (参考StatePattern0目录内的原始实现方法)
// 状态模式正是为了解决这个问题而存在的
// 当discount()行为的结果依赖于Member对象本身的状态（会员分）时，状态模式就是最佳的选择了，
// 也就是上面所说的一个对象的行为取决于它的状态


$m = new Member();
$m->setState(new PlatinumMemberState());

$m->setScore(1200);
echo '当前会员' . $m->getScore() . '积分，折扣为：' . $m->getDiscount(), PHP_EOL;

$m->setScore(990);
echo '当前会员' . $m->getScore() . '积分，折扣为：' . $m->getDiscount(), PHP_EOL;

$m->setScore(660);
echo '当前会员' . $m->getScore() . '积分，折扣为：' . $m->getDiscount(), PHP_EOL;

$m->setScore(10);
echo '当前会员' . $m->getScore() . '积分，折扣为：' . $m->getDiscount(), PHP_EOL;
