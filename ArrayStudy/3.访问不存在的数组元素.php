<?php
/**
 * @file   : 3.访问不存在的数组元素.php
 * @time   : 上午6:55
 * @date   : 2024/7/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

$a = array("a" => "red", "b" => "green", "c" => "blue");

// 判定数组是否存在某个元素
if (isset($a["e"])) {
    echo "元素存在";
} else {
    echo "元素不存在";
}


// 访问不存在的元素
echo $a["d"];                          // 输出: Undefined index: d

// 访问不存在的元素，并设置默认值
echo $a["d"] ?? "default";             // 输出: default

// 访问不存在的元素，并设置默认值，并将其添加到数组中
echo $a["d"] ?? ($a["d"] = "default"); // 输出: default

// 访问不存在的元素，并设置默认值，并将其添加到数组中，并返回整个数组
$a += ["d" => "default"];
print_r($a); // 输出: Array ( [a] => red [b] => green [c] => blue [d] => default )
