<?php
/**
 * @file: MyEnum.php
 * @date: 2021/8/4
 * @time: 16:35
 * @creator: ShanDong Xiedali
 * @mail   : 9727005@qq.com
 * @company: HiLand & RainyTop
 */

namespace PHPStudy\EnumStudy;

require_once "../../vendor/autoload.php";

use Hiland\Utils\Data\Enum;
use UnexpectedValueException;

class MyEnum extends Enum
{
    public const HI = "hi";
    public const BYE = "good bye";
    public const __default = self::HI;
}

var_dump(new MyEnum());
var_dump(new MyEnum(MyEnum::BYE));
var_dump(new MyEnum("hi"));

try {
    new MyEnum("I don't exist");
} catch (UnexpectedValueException $e) {
    var_dump($e->getMessage());
}
