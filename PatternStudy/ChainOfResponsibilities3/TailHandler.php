<?php
/**
 * @file   : TailHandler.php
 * @time   : 22:16
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;


// 尾结点（终极处理器）
 class TailHandler extends Handler {

    public function handlerRequest1(String $car) {
        echo("不知道汽车类型，还没有公司能处理此车退货");
    }

    public function handlerRequest2(String $car) {
        echo("不知道汽车类型，还没有公司能处理此车维修");
}
}