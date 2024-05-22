<?php
/**
 * @file   : Bim.php
 * @time   : 9:59
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_IOC;

use Hiland\Utils\IO\ConsoleHelper;

class Bim implements CanDisplay
{
    private CanDisplay $displayObject;

    public function __construct(CanDisplay $displayObject = null)
    {
        if (!$displayObject) {
            $this->displayObject = DisplayNullable::getInstance();
        } else {
            $this->displayObject = $displayObject;
        }
    }

    public function display()
    {
        ConsoleHelper::echoLine("Hello," . __CLASS__);
    }
}