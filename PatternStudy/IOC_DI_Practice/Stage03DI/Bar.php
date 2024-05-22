<?php
/**
 * @file   : Bar.php
 * @time   : 10:02
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage03DI;

use Hiland\Utils\IO\ConsoleHelper;

class Bar implements CanDisplay
{
    private CanDisplay $displayObject;

    public function __construct(CanDisplay $displayObject)
    {
        $this->displayObject = $displayObject;
    }

    public function display()
    {
        ConsoleHelper::echoLine("Hello," . __CLASS__);
        $this->displayObject->display();
    }
}