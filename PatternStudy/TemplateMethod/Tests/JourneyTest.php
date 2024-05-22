<?php
/**
 * @file   : JourneyTest.php
 * @time   : 10:07
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\TemplateMethod\Tests;


use PHP\Study\PatternStudy\TemplateMethod\BeachJourney;
use PHP\Study\PatternStudy\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

/**
 * JourneyTest测试所有的度假
 */
class JourneyTest extends TestCase
{

    public function testBeach()
    {
        $journey = new BeachJourney();
        /**
         * 测试是否在输出中包含某个正则表达式内容的信息
         */
        $this->expectOutputRegex('/sun-bathing/');
        $journey->takeATrip();
    }

    public function testCity()
    {
        $journey = new CityJourney();
        $this->expectOutputRegex('#drink#');
        $journey->takeATrip();
    }

    /**
     * 在PHPUnit中如何测试抽象模板方法
     */
    public function testLasVegas()
    {
        $journey = $this->getMockForAbstractClass('DesignPatterns\Behavioral\TemplateMethod\Journey');
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