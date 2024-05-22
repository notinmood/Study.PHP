<?php
/**
 * @file   : RollsRoyceHandler.php
 * @time   : 22:15
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;


// 劳斯莱斯 Handler 2
class RollsRoyceHandler extends Handler
{

    public function handlerRequest1(string $car)
    {
        if ($car == ("劳斯莱斯")) {
            echo("这里是劳斯莱斯公司，可以接收劳斯莱斯汽车退货");
        } else {
            $this->successor->handlerRequest1($car);
        }
    }

    public function handlerRequest2(string $car)
    {
        if ($car == ("劳斯莱斯")) {
            echo("这里是劳斯莱斯公司，可以修理劳斯莱斯汽车");
        } else {
            $this->successor->handlerRequest2($car);
        }
    }

}