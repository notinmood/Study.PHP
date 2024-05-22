<?php
/**
 * @file   : OutputTest.php
 * @time   : 10:20
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\TestStudy\OutputStudy\res;

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    /**
     * 验证是否结果中出现了某个字符串
     */
    public function testDisplayString()
    {
        $this->expectOutputString("hello world!");

        /**
         * 以下两行代码,无论是直接输出还是其他类型方法内输出的字符串都可以进行测试通过
         */
        // Foo::displayString();
        echo "hello world!";
    }

    /**
     * 验证结果中是否出现了某个 正则表达式表示的字符串
     * 正则表达式要使用 /或者 # 等特殊符号成对标识出来
     */
    public function testDisplayRegex()
    {
        $this->expectOutputRegex("/hello/");
        Foo::displayString();
    }
}
