<?php
/**
 * @file   : EmptyTest.php
 * @time   : 7:18
 * @date   : 2022/1/13
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace Hiland\Test\utils;

use PHPUnit\Framework\TestCase;

/**
 * 数据相等性判断
 * ────────────────────────
 * “”，“0”，0，null，false 他们之间 == 都是相等的
 */
class EqualTest extends TestCase
{
    /**
     * null 和 false 是相等的 (==)
     * null 和 false 是不全等的 (!==)
     * @return void
     */
    public function testNull1()
    {
        $this->_testNull(false);
    }

    /**
     * null 和 0 是相等的 (==)
     * null 和 0 是不全等的 (!==)
     * @return void
     */
    public function testNull2()
    {
        $this->_testNull(0);
    }

    private function _testNull($targetData)
    {
        $nullData = null;
        $actual = false;
        if ($targetData == $nullData) {
            $actual = true;
        }
        self::assertEquals(true, $actual);


        $actual = false;
        if ($targetData === $nullData) {
            $actual = true;
        }
        self::assertEquals(false, $actual);
    }

    /**
     * 数据相等性判断
     * @return void
     */
    public function testEqual()
    {
        $a = 1;
        $b = "1";
        $actual = false;
        if ($a == $b) {
            $actual = true;
        }
        self::assertEquals(true, $actual);

        $actual = false;
        if ($a === $b) {
            $actual = true;
        }
        self::assertEquals(false, $actual);

        $a = false;
        $b = "";
        $actual = false;
        if ($a == $b) {
            $actual = true;
        }
        self::assertEquals(true, $actual);

        $a = false;
        $b = "0";
        $actual = false;
        if ($a == $b) {
            $actual = true;
        }
        self::assertEquals(true, $actual);

        /**
         * 单纯用 == 判断的话，false 和 null 是相等的。
         */
        $a = false;
        $b = null;
        if ($a == $b) {
            $actual = true;
        } else {
            $actual = false;
        }
        self::assertEquals(true, $actual);

        /**
         * 判断是否为 null 的时候，用 is_null 方法
         */
        if (is_null($b)) {
            $actual = true;
        } else {
            $actual = false;
        }
        self::assertEquals(true, $actual);

        /**
         * 如果用 is_null 判断的话，false 不是 null
         */
        if (is_null($a)) {
            $actual = true;
        } else {
            $actual = false;
        }
        self::assertEquals(false, $actual);
    }
}