<?php
/**
 * @file   : ArrayAndObjectAccess.php
 * @time   : 16:44
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


namespace PHPStudy\ArrayAccessStudy;

use ArrayAccess;

class ArrayAndObjectAccess implements ArrayAccess
{
    /**
     * Data
     * @var array
     * @access private
     */
    private array $container = [];

    /**
     * Get a data by key
     * @param string $key The key data to retrieve
     * @access public
     */
    public function __get(string $key)
    {
        return $this->container[$key];
    }

    /**
     * Assigns a value to the specified data
     * @param string $key The data key to assign the value to
     * @param mixed $value The value to set
     * @access public
     */
    public function __set(string $key, mixed $value)
    {
        $this->container[$key] = $value;
    }

    /**
     * Whether a data exists by key
     * @param string $key
     * @return bool
     */
    public function __isset(string $key)
    {
        return isset($this->container[$key]);
    }

    /**
     * Whether a data exists by key
     * @param string $key A data key to check for
     * @access      public
     * @return boolean
     * @abstracting ArrayAccess
     */
    public function isContains(string $key): bool
    {
        return isset($this->container[$key]);
    }

    /**
     * Unsets a data by key
     * @param string $key The key to unset
     * @access public
     */
    public function remove(string $key): void
    {
        unset($this->container[$key]);
    }

    /**
     * Assigns a value to the specified offset
     * @param string $offset The offset to assign the value to
     * @param mixed $value The value to set
     * @access      public
     * @abstracting ArrayAccess
     */
    public function offsetSet($offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets an offset
     * @param string $offset The offset to unset
     * @access      public
     * @abstracting ArrayAccess
     */
    public function offsetUnset($offset): void
    {
        if ($this->offsetExists($offset)) {
            unset($this->container[$offset]);
        }
    }

    /**
     * Whether an offset exists
     * @param string $offset An offset to check for
     * @access      public
     * @return boolean
     * @abstracting ArrayAccess
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Returns the value at specified offset
     * @param string $offset The offset to retrieve
     * @access      public
     * @return mixed
     * @abstracting ArrayAccess
     */
    public function offsetGet($offset): mixed
    {
        return $this->offsetExists($offset) ? $this->container[$offset] : null;
    }
}
