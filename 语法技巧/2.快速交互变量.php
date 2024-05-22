<?php
/**
 * @file   : 2.快速交互变量.php
 * @time   : 9:20
 * @date   : 2022/3/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$a = 3;
$b = 4;

[$a, $b] = [$b, $a];

var_dump($a);
var_dump($b);

/**
 * --output--
 * int(4)
 * int(3)
 */

/**
 * 快速交互变量在 Python 内更简单：
 * a,b= b,a
 * (根本不需要借助 [] )
 */