<?php
/**
 * @user: ShanDong Xiedali
 * @date: 2021/8/4
 * @time: 7:44
 * @company: 海澜&润拓
 */

/**
 * 总结:
 * $b = $a ?? $c;
 * 相当于 $b = isset($a) ? $a : $c;
 * ————————————————————————————————
 * $b = $a ?: $c; //就是缩略的原来的三元操作符 a?b:c
 * 相当于 $b = !empty($a) ? $a : $c;
 */

$myArray['d'] = [];

$isSet = $myArray['d'] ?? '原来没有初始化,现新设置值为x';
$noEmpty = $myArray['d'] ?: '原来值为empty,现在赋值为x';
echo PHP_EOL . "是否已经设置值:$isSet";
echo PHP_EOL . "是否非空:$noEmpty";
//--output-————————————————
//是否已经设置值:Array
//是否非空:原来值为empty,现在赋值为x

$isSet = $myArray['e'] ?? '原来没有初始化,现新设置值为x';
$noEmpty = $myArray['e'] ?: '原来值为empty,现在赋值为x';
echo PHP_EOL . "是否已经设置值:$isSet";
echo PHP_EOL . "是否非空:$noEmpty";
//--output-————————————————
//是否已经设置值:原来没有初始化,现新设置值为x
//是否非空:原来值为empty,现在赋值为x