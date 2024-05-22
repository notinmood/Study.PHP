<?php
/**
 * @file: MyPathTest.php
 * @time: 10:47
 * @date: 2021/8/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PathStudy;

use PHPUnit\Framework\TestCase;

class MyPathTest extends TestCase
{
    public function testGetPathInfo()
    {
        $path = "MyStudy\\PHP\\PathStudy\\MyPathTest.a.PHP";
        $actual = MyPath::getPathInfo($path);
        $this->assertEquals("PHP", $actual);
    }
}
