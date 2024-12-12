<?php
/**
 * @file   : 01.abc入门.php
 * @time   : 11:41
 * @date   : 2024/12/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../vendor/autoload.php";

use Mpdf\Mpdf;

$pdf = new Mpdf(['margin_left' => 10, 'default_font' => 'Arial']);

//自动分析录入内容字体（有中文字符时，必选，否则乱码）
$pdf->autoScriptToLang = true;
$pdf->autoLangToFont = true;

$pdf->WriteHTML('Hello World!你好，世界！');
$pdf->Output();
