<?php
/**
 * @file   : Request.php
 * @time   : 19:39
 * @date   : 2021/9/6
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ChainOfResponsibilities2;

class Request
{
    public $name = "";
    public $level = 0;

    public function __construct($name, $level)
    {
        $this->level = $level;
        $this->name = $name;
    }
}