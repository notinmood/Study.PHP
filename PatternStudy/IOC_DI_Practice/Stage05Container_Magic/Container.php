<?php
/**
 * @file   : Container.php
 * @time   : 12:00
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\PatternStudy\IOC_DI_Practice\Stage05Container_Magic;

/**
 * @property mixed|Bar bar
 * @property mixed|Bim bim
 * @property mixed|Foo foo
 */
class Container
{
    private array $objectList = array();

    /**
     * @param $key
     * @param $value
     */
    function __set($key, $value)
    {
        $this->objectList[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    function __get($key)
    {
        return $this->objectList[$key];
    }
}