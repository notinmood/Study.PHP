<?php
/**
 * @file   : index.php
 * @time   : 11:00
 * @date   : 2021/9/18
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

/**
 * 需要配数据库
 * 并在数据库内建立表
 * -- ----------------------------
 * -- Table structure for think_user
 * -- ----------------------------
 * DROP TABLE IF EXISTS `think_user`;
 * CREATE TABLE `think_user` (
 * `id` int(11) NOT NULL AUTO_INCREMENT,
 * `name` varchar(255) CHARACTER SET utf8 DEFAULT '',
 * `email` varchar(255) CHARACTER SET utf8 DEFAULT '',
 * `birthday` datetime DEFAULT NULL,
 * PRIMARY KEY (`id`)
 * ) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
 */
require "../vendor/autoload.php";

use Hiland\Utils\Data\DateHelper;
use Hiland\Utils\Data\RandHelper;
use Hiland\Utils\DataModel\ModelMate;
use think\facade\Db;

// (new think\facade\Db)->setConfig([
Db::setConfig([
    // 默认数据连接标识
    'default' => 'mysql',
    // 数据库连接信息
    'connections' => [
        'mysql' => [
            // 数据库类型
            'type' => 'mysql',
            // 主机地址
            'hostname' => '127.0.0.1',
            // 用户名
            'username' => 'root',
            // 数据库名
            'database' => 'test',
            // 数据库编码默认采用utf8
            'charset' => 'utf8',
            // 数据库表前缀
            'prefix' => 'think_',
            // 数据库调试模式
            'debug' => true,
        ],
    ],
]);


/**
 * 准备数据
 */
$data["name"] = RandHelper::rand(6, "LETTER");
$data["email"] = RandHelper::rand(4, "LETTER") . "@qq.com";
$data["birthday"] = DateHelper::format();


// /**
//  * 1、使用查询的方式
//  * 使用Db::table的时候,要给其传递完整的表名称(包括前缀(即便在配置文件中配置了前缀))
//  * 使用Db::name的时候,不不用为其传递表的前缀.
//  */
// Db::table('think_user')
//     ->insert($data);
//
// Db::name('user')
//     ->insert($data);
//
// /**
//  * 2、使用模型的方式
//  */
// $user = new User();
// $user->insert($data);

/**
 * 3、使用封装的ModelMate的方式
 */

// $cm= new CommonModel("user");
// $cm-> insert($data);
$mate = new ModelMate("user");
$data["id"] = 2;
$mate->interact($data);