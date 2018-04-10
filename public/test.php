<?php
/**
 * Created by PhpStorm.
 * User: yuai
 * Date: 2018/2/28
 * Time: 上午2:27
 */
//$redis = new Redis();
//$redis->connect("193.112.60.146","6379");  //php客户端设置的ip及端口
//$redis->auth('aAa741734224');
////存储一个 值
////$redis->set("say","hello world");
//echo $redis->get("say");     //应输出hello world
//phpinfo();
$htmlPaths = 'https://www.wsite.site/';
$pdfPathFull = $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.$pdfPath;
var_dump($pdfPathFull);
exec("/home/wkhtmltox/bin/wkhtmltopdf -q -l {$htmlPaths} {$pdfPathFull}");