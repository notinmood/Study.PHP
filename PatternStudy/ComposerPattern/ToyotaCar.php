<?php
/**
 * @file: ToyotaCar.php
 * @time: 15:54
 * @date: 2021/8/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ComposerPattern;

class ToyotaCar extends BaseCar
{
    public function __construct(IEngine $engine)
    {
        parent::__construct('丰田汽车', $engine);
    }

    public function drive(): void
    {
        echo "启动{$this->brand}汽车" . PHP_EOL;
        echo "目前的动力来源为{$this->engine->power()}" . PHP_EOL;
    }
}