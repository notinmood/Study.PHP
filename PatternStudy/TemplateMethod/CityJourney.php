<?php
/**
 * @file   : CityJourney.php
 * @time   : 10:05
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\TemplateMethod;

/**
 * CityJourney类（在城市中度假）
 */
class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Eat, drink, take photos and sleep\n";
    }
}