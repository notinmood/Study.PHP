<?php
/**
 * @file   : HeadHandler.php
 * @time   : 22:11
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;

// 头结点
class HeadHandler extends Handler
{
    public function handlerRequest1(string $car)
    {
        $this->successor->handlerRequest1($car);
    }

    public function handlerRequest2(string $car)
    {
        $this->successor->handlerRequest2($car);
    }
}