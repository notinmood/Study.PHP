<?php
/**
 * @file   : 1.传统闭包.php
 * @time   : 上午12:36
 * @date   : 2024/7/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

// +--------------------------------------------------------------------------
// |::说明·| 使用传统的内外两层函数实现闭包；内部函数通过use()引用外部函数的变量。
// +--------------------------------------------------------------------------

function makeAdder(int $x): Closure
{
    return static function (int $y) use ($x) {
        return $x + $y;
    };
}

$add5  = makeAdder(5);
$add10 = makeAdder(10);

var_dump($add5);
print("──分隔符───────────────────────────────────\n");
var_dump($add5(6));
var_dump($add10(20));
