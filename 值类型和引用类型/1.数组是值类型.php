<?php
/**
 * @file   : 1.数组是值类型.php
 * @time   : 20:39
 * @date   : 2022/2/4
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$a = array("a" => "red", "b" => "green", "c" => "blue");
$b = $a;

echo array_shift($b);
echo PHP_EOL;
echo '────────────────────────';
echo PHP_EOL;
print_r($b);
echo PHP_EOL;
echo '────────────────────────';
echo PHP_EOL;
print_r($a);
