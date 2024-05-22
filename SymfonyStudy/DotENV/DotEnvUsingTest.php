<?php
/**
 * @file   : DotEnvUsingTest.php
 * @time   : 21:23
 * @date   : 2022/1/3
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

namespace PHP\Study\SymfonyStudy\DotENV;

use Dotenv\Dotenv;
use Hiland\Utils\Environment\EnvHelper;
use PHPUnit\Framework\TestCase;

class DotEnvUsingTest extends TestCase
{
    public function testW()
    {
        $root = EnvHelper::getRootPhysicalPath();
        $envArray = (new Dotenv())->load($root . '/.env');
        dump($envArray);
    }

    public function testM()
    {
        //https://blog.csdn.net/weixin_38125045/article/details/109100324?spm=1001.2101.3001.6650.2&utm_medium=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-2.pc_relevant_paycolumn_v2&depth_1-utm_source=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-2.pc_relevant_paycolumn_v2&utm_relevant_index=5
        //https://blog.csdn.net/ljh101/article/details/116502345?spm=1001.2101.3001.6650.2&utm_medium=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-2.no_search_link&depth_1-utm_source=distribute.pc_relevant.none-task-blog-2%7Edefault%7ECTRLIST%7Edefault-2.no_search_link&utm_relevant_index=5
        $root = EnvHelper::getRootPhysicalPath();
        $envFile = $root . DIRECTORY_SEPARATOR . '.env';
        //把这个放到项目的入口文件里
        if (is_file($envFile)) {
            $env = parse_ini_file($envFile, true);    //解析env文件,name = PHP_KEY
            foreach ($env as $key => $val) {
                $name = strtoupper($key);
                if (is_array($val)) {
                    foreach ($val as $k => $v) {    //如果是二维数组 item = PHP_KEY_KEY
                        $item = $name . '_' . strtoupper($k);
                        putenv("$item=$v");
                    }
                } else {
                    putenv("$name=$val");
                }
            }
        }


        //用getenv('对应的key')获取值
        $actual = getenv("DB_DATABASE");
        $expected = "homestead";
        self::assertEquals($expected, $actual);

        $actual = getenv("DB_DATABASE_3");
        self::assertEquals(false, $actual);
    }
}