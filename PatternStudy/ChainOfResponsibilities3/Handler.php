<?php
/**
 * @file   : Handler.php
 * @time   : 22:09
 * @date   : 2021/9/23
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\ChainOfResponsibilities3;

// 处理请求的责任链结点


abstract class Handler
{
    // 后继结点
    public Handler $successor;

    // 责任链
    public function start(string $car, string $status)
    {
        if ($status == "退货") {
            $this->handlerRequest1($car);
        } else if ($status == ("维修")) {
            $this->handlerRequest2($car);
        } else {
            echo("没有什么需求请不要打电话骚扰客服！");
        }
    }

    // 退货处理请求 1
    public abstract function handlerRequest1(string $car);

    // 维修处理请求 2
    public abstract function handlerRequest2(string $car);

    // set successor
    public function setSuccessor(Handler $successor): Handler
    {
        $this->successor = $successor;
        return $this->successor;
    }
}

