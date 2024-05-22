<?php
/**
 * @file   : Handler.php
 * @time   : 19:43
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ChainOfResponsibilities1;

use Exception;

abstract class Handler
{
    /**
     * 移交给下一步处理的Handler
     * @var null
     */
    public $successor = null;

    /**
     * 处理逻辑
     * @throws Exception
     */
    public function handle($request)
    {
        throw new Exception("请在派生类中实现本方法!");
    }
}