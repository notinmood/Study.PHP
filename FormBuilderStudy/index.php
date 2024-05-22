<?php
/**
 * @file   : index.php
 * @time   : 8:26
 * @date   : 2021/9/24
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

use FormBuilder\Factory\Elm;

$action = "save.php";
$method = "POST";

$input = Elm::input("goodsName", "商品名称");
$textarea = Elm::textarea('goodsDesc', '商品简介');
$switch = Elm::switches('isOpen', '是否开启')->activeText('开启')->inactiveText('关闭');


$form = Elm::createForm($action)->setMethod($method);

//添加组件
$form->setRule([$input, $textarea]);
$form->append($switch);

//生成表单页面
echo $formHtml = $form->view();