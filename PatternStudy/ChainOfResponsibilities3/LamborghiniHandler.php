<?php
/**
 * @file   : LamborghiniHandler.php
 * @time   : 22:16
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;

// 兰博基尼 Handler 3
class LamborghiniHandler extends Handler
{
    public function handlerRequest1(string $car)
    {
        if ($car == ("兰博基尼")) {
            echo("这里是兰博基尼公司，可以接收兰博基尼汽车退货");
        } else {
            $this->successor->handlerRequest1($car);
        }
    }

    public function handlerRequest2(string $car)
    {
        if ($car == ("兰博基尼")) {
            echo("这里是兰博基尼公司，可以修理兰博基尼汽车");
        } else {
            $this->successor->handlerRequest2($car);
        }
    }
}