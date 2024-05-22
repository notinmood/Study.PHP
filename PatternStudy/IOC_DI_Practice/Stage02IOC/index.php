<?php
/**
 * @file   : index.php
 * @time   : 10:03
 * @date   : 2021/9/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

use PHP\Study\PatternStudy\IOC_DI_Practice\Stage02IOC\Bar;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage02IOC\Bim;
use PHP\Study\PatternStudy\IOC_DI_Practice\Stage02IOC\Foo;

require "../../../vendor/autoload.php";

/**
 * 在这里一层一层的创建对象：先创建最基本的对象bim;然后在创建依赖此bim的对象bar;
 * 然后创建依赖bar的对象foo,最后调用foo的方法完成功能.
 * 这些所有的工作原来是在业务逻辑类(Foo,Bar,Bim等)内完成,而现在移到客户端中完成的.
 * 从视觉层面上,原来的顺序是先调用Foo,(Foo内)再调用Bar,(Bar内)再调用Bim
 *            现在的顺序是先创建Bim,再创建Bar,再创建Foo
 * 两者的顺序完全反过来了,所以这个叫做控制翻转IOC
 * ────────────────────────
 * 依赖关系的控制反转到调用链的起点。这样你可以完全控制依赖关系，
 * 通过调整不同的注入对象，来控制程序的行为。
 */
$bim = new Bim();
$bar = new Bar($bim);
$foo = new Foo($bar);
$foo->display();
