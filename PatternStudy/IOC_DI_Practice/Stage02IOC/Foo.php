<?php
/**
 * @file   : Foo.php
 * @time   : 10:02
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage02IOC;

use Hiland\Utils\IO\ConsoleHelper;

class Foo
{
    private Bar $bar;

    public function __construct(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function display()
    {
        ConsoleHelper::echoLine("Hello," . __CLASS__);
        $this->bar->display();
    }
}