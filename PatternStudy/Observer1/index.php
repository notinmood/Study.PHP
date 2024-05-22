<?php
/**
 * @file   : index.php
 * @time   : 20:22
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use Hiland\Utils\IO\ConsoleHelper;
use PHP\Study\PatternStudy\Observer1\BellSubject;
use PHP\Study\PatternStudy\Observer1\StudentObserve;
use PHP\Study\PatternStudy\Observer1\TeacherObserver;

$bell = new BellSubject();
$teacher = new TeacherObserver();
$student = new StudentObserve();
$bell->add($teacher);
$bell->add($student);
$bell->notify();

ConsoleHelper::echoLine("────────────────────────");
$bell->remove($student);
$bell->notify();
