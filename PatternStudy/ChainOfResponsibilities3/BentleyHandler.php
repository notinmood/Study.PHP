<?php
/**
 * @file   : BentleyHandler.php
 * @time   : 22:15
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;

// 宾利 Handler 1
class BentleyHandler extends Handler
{

    public function handlerRequest1(string $car)
    {
        if ($car == ("宾利")) {
            echo("这里是宾利公司，可以接收宾利汽车退货");
        } else {
            $this->successor->handlerRequest1($car);
        }
    }

    public function handlerRequest2(string $car)
    {
        if ($car == ("宾利")) {
            echo("这里是宾利公司，可以修理宾利汽车");
        } else {
            $this->successor->handlerRequest2($car);
        }
    }
}