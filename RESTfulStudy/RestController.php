<?php

namespace PHP\Study\RESTfulStudy;
require "../vendor/autoload.php";

$view = "";
if (isset($_GET["view"]))
    $view = $_GET["view"];
/*
 * RESTful service 控制器
 * URL 映射
*/
switch ($view) {
    case "single":
        // 处理 REST Url /site/show/<id>/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getSite($_GET["id"]);
        break;

    case "all":
        // 处理 REST Url /site/list/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllSites();
        break;

    default:
        //404 - not found;
        echo "Nothing";
        break;
}