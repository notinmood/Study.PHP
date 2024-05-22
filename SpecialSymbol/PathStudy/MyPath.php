<?php
/**
 * @file: MyPath.php
 * @time: 10:30
 * @date: 2021/8/8
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\PathStudy;

class MyPath
{
    public static function getPathInfo($fileFullName = "",$flag=PATHINFO_EXTENSION)
    {
        if (!$fileFullName) {
            $fileFullName = __FILE__;
        }

        return pathinfo($fileFullName,$flag);
    }
}
