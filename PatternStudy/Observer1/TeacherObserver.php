<?php
/**
 * @file   : TeacherObserver.php
 * @time   : 20:18
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer1;

use Hiland\Utils\IO\ConsoleHelper;

class TeacherObserver implements Observer
{
    /**
     *
     */
    public function response(BellSubject $subject)
    {
        ConsoleHelper::echoLine("{$subject->bellName} 老师站上讲台,开始讲课!");
    }
}