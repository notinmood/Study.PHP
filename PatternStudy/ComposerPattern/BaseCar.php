<?php
/**
 * @file: BaseCar.php
 * @time: 15:52
 * @date: 2021/8/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PatternStudy\ComposerPattern;

abstract class BaseCar implements CarContract
{
    protected string $brand;
    protected IEngine $engine;

    public function __construct($brand, IEngine $engine)
    {
        $this->brand = $brand;
        $this->engine = $engine;
    }

    abstract public function drive(): void;
}