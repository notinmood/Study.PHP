<?php
/**
 * @file   : MyClassTest.php
 * @time   : 12:40
 * @date   : 2021/8/16
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\TestStudy\MockStudy;

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testGetName()
    {
        $stub = $this->createMock(MyClass::class);
        $stub->method("getName")->willReturn("zhangsan","lisi");
        $this->assertEquals("zhangsan", $stub->getName());
        $this->assertEquals("lisi", $stub->getName());
    }
}
