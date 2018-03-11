<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset(  'admin/assets/i/favicon.png' )}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset(  'admin/assets/i/app-icon72x72@2x.png' )}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset(  'admin/assets/css/amazeui.min.css' )}}"/>
    <link rel="stylesheet" href="{{asset(  'admin/assets/css/admin.css' )}}">
    <script src="{{asset(  'admin/assets/js/jquery.min.js' )}}"></script>
    <script src="{{asset(  'admin/assets/js/app.js' )}}"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->
</head>
<body>
@yield( 'content' )
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset(  'admin/assets/js/polyfill/rem.min.js' )}}"></script>
<script src="{{asset(  'admin/assets/js/polyfill/respond.min.js' )}}"></script>
<script src="{{asset(  'admin/assets/js/amazeui.legacy.js' )}}"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset(  'admin/assets/js/amazeui.min.js' )}}"></script>
<!--<![endif]-->
</body>
</html>