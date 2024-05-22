<?php

namespace PHP\Study\KeyWordStudy;
require "../../vendor/autoload.php";

use Hiland\Utils\Environment\EnvHelper;

/**
 * 自 PHP 5.5 起，关键词 class 也可用于类名的解析。
 * 使用 ClassName::class 你可以获取一个字符串，
 * 包含了类 ClassName 的完全限定名称。
 * 这对使用了 命名空间 的类尤其有用。
 * Class Demo
 * @package Misc
 */
class Demo
{
    public function test()
    {
        // code...
    }
}

echo gettype(Demo::class), EnvHelper::getNewLineSymbol();
echo Demo::class, EnvHelper::getNewLineSymbol();



