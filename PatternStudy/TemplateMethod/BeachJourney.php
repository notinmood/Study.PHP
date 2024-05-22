<?php
/**
 * @file   : BeachJourney.php
 * @time   : 10:05
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\TemplateMethod;

/**
 * BeachJourney类（在海滩度假）
 */
class BeachJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Swimming and sun-bathing\n";
    }
}