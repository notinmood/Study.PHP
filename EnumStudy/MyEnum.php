<?php
/**
 * @file: MyEnum.php
 * @date: 2021/8/4
 * @time: 16:35
 * @creator: ShanDong Xiedali
 * @mail   : 9727005@qq.com
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\EnumStudy;
require_once "../vendor/autoload.php";

use Hiland\Utils\Data\Enum;

class MyEnum extends Enum
{
    const HI = "hi";
    const BYE = "good bye";
    const __default = self::HI;
}

var_dump(new MyEnum());
var_dump(new MyEnum(MyEnum::BYE));
var_dump(new MyEnum("hi"));

try {
    new MyEnum("I don't exist");
} catch (Exception $e) {
    var_dump($e->getMessage());
}