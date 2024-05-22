<?php
/**
 * @file   : DotEnvTest.php
 * @time   : 12:35
 * @date   : 2022/1/5
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\Test;

use Hiland\Utils\Config\ConfigHelper;
use PHPUnit\Framework\TestCase;

class DotEnvTest extends TestCase
{
    public function testGetEnv(){
        $actual =  ConfigHelper::getEnv("database_mysql.username");
        $expected = "root";
        self::assertEquals($expected,$actual);
    }
}