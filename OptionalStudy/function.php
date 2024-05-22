<?php
/**
 * @file   : function.php
 * @time   : 8:52
 * @date   : 2021/9/9
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */


use PHP\Study\OptionalStudy\Optional;

if (!function_exists('optional')) {
    /**
     * Provide access to optional objects.
     * @param mixed         $value
     * @param callable|null $callback
     * @return mixed
     */
    function optional($value = null, callable $callback = null)
    {
        if (is_null($callback)) {
            return new Optional($value);
        } elseif (!is_null($value)) {
            return $callback($value);
        }
    }
}
