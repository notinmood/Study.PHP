<?php
/**
 * @file   : 09.综合测试.php
 * @time   : 17:08
 * @date   : 2024/12/11
 * @mail   : 9727005@qq.com
 * @creator: ShanDong Xiedali
 * @company: HiLand & RainyTop
 */

require "../../vendor/autoload.php";

use Mpdf\Mpdf;

$html = '<div>测试</div>
<div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
    <img src="C:\\pdf\\pic.webp" alt="图片"
         style="width: 210mm; height: 297mm; margin: 0;" />
</div>';
/*
   * 关于设置的default_socket_timeout，curlExecutionTimeout，curlTimeout请求超时时间
   * 本地测试了一下，如果文档中存在相同的图片链接，如果第一次都超时了，第二次不会再请求了，默认是失败
   *
   * 例如：
   *  <img src='127.0.0.1:8080/test.png'/> 这个第一次请求超时,会真正的去请求
   *  <img src='127.0.0.1:8080/test.png'/> 这个默认是失败了
   *
  * 定义输出流超时时间 - 主要针对插件里面的fopen和file_get_contents方法，这两个方法访问图片url地址，如果地址一直没有响应（图片url重定向也有可能导致一直获取不到图片，导致卡死，比如http重定向到https），这个两个方法就一直卡着
  * 图片获取文件路径 ：vendor\mpdf\mpdf\src\Image\ImageProcessor.php
  * 不过获取不到最后会用curl_setopt去请求的，curlTimeout，curlExecutionTimeout这个两个参数是对应超时时间
  * 这边设置超时时间，避免一直卡着，导致生成pdf失败
  *
  * 单位：秒
  */
ini_set('default_socket_timeout', 5);

$mpdf = new Mpdf([
        'mode'             => 'utf-8',
        'tempDir'          => 'c:/pdf/',
        'useSubstitutions' => true,
        'backupSubsFont'   => ['dejavusanscondensed', 'arialunicodems', 'sun-exta'],
]);

$mpdf->SetFooter('{PAGENO} / {nbpg}');
// pdf里面的title名称
$mpdf->SetTitle('测试');

$mpdf->allow_charset_conversion = true;
$mpdf->useAdobeCJK              = true;
$mpdf->autoLangToFont           = true;
$mpdf->autoScriptToLang         = true;
//存在一张图片加载不了就接口报错，这边注释掉
// $mpdf->showImageErrors = true;

/*
 * curlTimeout是设置连接对方主机时的最长等待时间
 * curlExecutionTimeout整个cURL函数执行过程的最长等待时间
 * 设置这两个主要是请求图片相关，有些图片访问不了，不设置，就一直卡着
 * 这边试了下，最终以curlExecutionTimeout这个时间
 *
 * 单位：秒
 */
$mpdf->curlTimeout                  = 5;
$mpdf->curlExecutionTimeout         = 7;

$mpdf->biDirectional = true;

//样式，自己写个路径
$header = "<link href='c:/pdf/pdf.css' rel='stylesheet'>";
/*
 * vendor//mpdf//mpdf//src//Tag//BlockTag.php 900行报错：Undefined index: list_style_type
 * 加以下样式就不报错，虽然不报错了，但是样式上不好看
 */
$header.='<style> li { list-style-type: none; list-style-image: none; list-style-position: unset; } </style>';
$mpdf->WriteHTML($header);

$html = "<div>{$html}</div>";

$mpdf->Bookmark('测试', 0);
try {
    $mpdf->WriteHTML($html);
} catch (\Exception $ex) {
    var_dump('生成pdf失败：');
    var_dump($ex->getMessage());
    return;
}

//D是下载
$mpdf->Output();

//保存到文件
// $mpdf->Output('test.pdf', 'F');


//参看: https://blog.csdn.net/hehuan8363/article/details/103921776
