<?php
/**
 * @file   : 02.表格.php
 * @time   : 19:59
 * @date   : 2024/12/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use Mpdf\Mpdf;
use Hiland\Utils\IO\FileHelper;


$path = "E:\\myworkspace\\Study.PHP\\PDFStudy\\";
$html= FileHelper::getEncodingContent($path."02.表格内容.html");

$mpdf = new Mpdf();
$mpdf->SetDisplayMode('fullpage');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
//$stylesheet = file_get_contents('mpdfstyletables.css');
//$mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text

// $mpdf->WriteHTML($contract_content, 2);
$mpdf->WriteHTML($html, 2);

$file = $path.'透明印章.png';
$mpdf->Image($file, 140, 200,50,50); //追加盖章图片，貌似可以获取远程的，非必要请使用服务器本地的，以前tcpdf就是无法获取远程的，mpdf未测试远程图片

$mpdf->Output(); //D是下载
