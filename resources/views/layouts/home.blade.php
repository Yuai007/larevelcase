<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{{$webtitle}}</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="{{asset(  'assets/i/favicon.ico' )}}">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="{{asset(  'assets/i/app-icon72x72@2x.png' )}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="{{asset(  'assets/i/app-icon72x72@2x.png' )}}">
    <meta name="msapplication-TileImage" content="{{asset(  'assets/i/app-icon72x72@2x.png' )}}">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="{{asset(  'assets/css/amazeui.min.css' )}}">
    <link rel="stylesheet" href="{{asset(  'assets/css/app.css' )}}">
</head>

<body id="blog">
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        {{--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Logo"/>--}}
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button"
            data-am-collapse="{target: '#blog-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="{{url('/')}}">首页</a></li>
            <li><a href="lw-article.html">工作室</a></li>
            <li><a href="lw-article-fullwidth.html">工具</a></li>
            <li><a href="lw-timeline.html">存档</a></li>
        </ul>
        <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>
    </div>
</nav>
<hr>
<!-- nav end -->

@yield( 'content' )

<footer class="blog-footer">
    <div class="blog-text-center">©2018, Yuai. 粤ICP备17148203号-1</div>
</footer>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset(  'assets/js/jquery.min.js' )}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset(  'assets/js/amazeui.ie8polyfill.min.js' )}}"></script>
<![endif]-->
<script src="{{asset(  'assets/js/amazeui.min.js' )}}"></script>
</body>
</html>