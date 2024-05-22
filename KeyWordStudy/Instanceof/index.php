<?php
/**
 * @file   : index.php
 * @time   : 7:27
 * @date   : 2022/1/31
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use PHP\Study\_res\CanWork;
use PHP\Study\_res\CollegeStudent;
use PHP\Study\_res\Student;

$cs = new CollegeStudent("zhangsan", 20);


/**
 * instanceof 后面可以是一个具体的类型
 */
if ($cs instanceof CollegeStudent) {
    el("YYY当前对象是一个大学生");
} else {
    el("NNN当前对象不是一个大学生");
}

/**
 * instanceof 后面可以是一个类型的全名称字符串
 */
$className = CollegeStudent::class;
if ($cs instanceof $className) {
    el("YYY当前对象是一个大学生");
} else {
    el("NNN当前对象不是一个大学生");
}

/**
 * instanceof 可以判断基类
 */

/** @noinspection all */
if ($cs instanceof Student) {
    el("YYY当前对象是一个学生");
} else {
    el("NNN当前对象不是一个学生");
}

/**
 * instanceof 可以判断接口
 */
if ($cs instanceof CanWork) {
    el("YYY当前对象可以工作");
} else {
    el("NNN当前对象不可以工作");
}