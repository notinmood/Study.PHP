<?php
/**
 * @file: BatteryTest.php
 * @time: 9:24
 * @date: 2021/8/10
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\ComposerStudy;

use PHPUnit\Framework\TestCase;

class AutoloadTest extends TestCase
{
    public function testAutoloadFiles(){
       $b= getName('zhang','san');
       $a= "zhang san";

       $this->assertEquals($a, $b);
    }
}
