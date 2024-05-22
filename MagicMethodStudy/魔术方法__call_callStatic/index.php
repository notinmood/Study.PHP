<?php
/**
 * @file   : index.php
 * @time   : 16:58
 * @date   : 2021/10/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\MagicMethodStudy\魔术方法__call_callStatic\Student;

require "../../vendor/autoload.php";

$student = new Student("张三", 22);
el("正常调用:" . $student->getMyName());
el('────────────────────────');
/**
 * getFullName并不会直接调用 student 的方法 getFullName ,因为 getFullName 是private可见的.
 * 此处getFullName是调用student内的__call,然后通过__call再调用student内的私有方法getFullName
 */
el($student->getFullName());
el('────────────────────────');
/**
 * 调用在类型上用 @method 声明的方法，这样IDE不会报错，同时也会运行 __call()逻辑
 */
$student->welcomeName();
el('────────────────────────');
/**
 * 访问一个没有定义的静态方法,将调用Student内定义的__callStatic方法
 */
el(Student::getFoo());