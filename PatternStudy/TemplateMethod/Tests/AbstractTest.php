<?php
/**
 * @file   : AbstractTest.php
 * @time   : 11:13
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\TemplateMethod\Tests;

use PHPUnit\Framework\TestCase;

/**
 * 对抽象方法的测试
 */
class AbstractTest extends TestCase
{
    /**
     * 在PHPUnit中如何测试抽象模板方法
     */
    public function testLasVegas()
    {
        $journey = $this->getMockForAbstractClass('PHP\Study\PatternStudy\TemplateMethod\Journey');
        $journey->expects($this->once())
            ->method('enjoyVacation')
            ->will($this->returnCallback(array($this, 'mockUpVacation')));
        $this->expectOutputRegex('#Las Vegas#');
        $journey->takeATrip();
    }

    public function mockUpVacation()
    {
        echo "Fear and loathing in Las Vegas\n";
    }
}