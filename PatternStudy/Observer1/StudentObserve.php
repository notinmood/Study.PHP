<?php
/**
 * @file   : StudentObserve.php
 * @time   : 20:20
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\Observer1;

use Hiland\Utils\IO\ConsoleHelper;

class StudentObserve implements Observer
{

    /**
     * @return mixed
     */
    public function response(BellSubject $subject)
    {
        ConsoleHelper::echoLine("{$subject->bellName} 学生回到自己的座位，做好上课的准备!开始听课喽!");
    }
}