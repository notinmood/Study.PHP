<?php
/**
 * @file   : 1.array_shift.php
 * @time   : 7:03
 * @date   : 2022/1/31
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$a = array("a" => "red", "b" => "green", "c" => "blue");
$b = array_shift($a);

echo "弹出的元素为：" . $b;
echo PHP_EOL;
echo '────────────────────────';
echo PHP_EOL;
echo "弹出元素后原数组为：" . PHP_EOL;
print_r($a);

/**
 * --output--
 * 弹出的元素为：red
 * ────────────────────────
 * 弹出元素后原数组为：
 * Array
 * (
 * [b] => green
 * [c] => blue
 * )
 */