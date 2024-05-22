<?php
/**
 * @file   : Optional.php
 * @time   : 21:50
 * @date   : 2021/9/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHP\Study\OptionalStudy;

use ArrayObject;


class Optional
{
    use Macroable {
        __call as macroCall;
    }

    /**
     * The underlying object.
     * @var mixed
     */
    protected $value;

    /**
     * Create a new optional instance.
     * @param mixed $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Dynamically access a property on the underlying object.
     * @param string $key
     * @return void|null
     */
    public function __get($key)
    {
        if (is_object($this->value)) {
            return $this->value->{$key} ?? null;
        }
    }

    /**
     * Dynamically check a property exists on the underlying object.
     * @param mixed $name
     * @return bool
     */
    public function __isset($name)
    {
        if (is_object($this->value)) {
            return isset($this->value->{$name});
        }

        if (is_array($this->value) || $this->value instanceof ArrayObject) {
            return isset($this->value[$name]);
        }

        return false;
    }


    /**
     * Dynamically pass a method to the underlying object.
     * @param string $method
     * @param array  $parameters
     * @return mixed
     */
    public function __call(string $method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        if (is_object($this->value)) {
            return $this->value->{$method}(...$parameters);
        }
    }
}
