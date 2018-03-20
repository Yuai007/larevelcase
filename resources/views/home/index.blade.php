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
  <link rel="icon" type="image/png" href="{{asset(  'assets/i/favicon.png' )}}">
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
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="/">首页</a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          首页布局 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="lw-index.html">1. blog-index-standard</a></li>         
          <li><a href="lw-index-nosidebar.html">2. blog-index-nosidebar</a></li>
          <li><a href="lw-index-center.html">3. blog-index-layout</a></li>
          <li><a href="lw-index-noslider.html">4. blog-index-noslider</a></li>
        </ul>
      </li>
      <li><a href="lw-article.html">标准文章</a></li>
      <li><a href="lw-img.html">图片库</a></li>
      <li><a href="lw-article-fullwidth.html">全宽页面</a></li>
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
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        @foreach($lists as $list)
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="{{$list -> topimage}}" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="" class="blog-color"> {{$list -> parent}} &nbsp;</a></span>
                    <span> @ {{$list -> own}} &nbsp;</span>
                    <span>{{str_limit($list -> updated_at,10,'')}}</span>
                    <h1><a href="">{{$list -> title}}</a></h1>
                    <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变。
                    </p>
                    <p><a href="" class="blog-continue">continue reading</a></p>
                </div>
            </article>
        @endforeach

        <ul class="am-pagination">
            {{ $lists->links() }}
  {{--<li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>--}}
  {{--<li class="am-pagination-next"><a href="">Next &raquo;</a></li>--}}
</ul>
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="assets/i/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>妹纸</p>
            <p>
        我是妹子UI，中国首个开源 HTML5 跨屏前端框架
        </p><p>我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
            <a href="" class="blog-tag">amaze</a>
            <a href="" class="blog-tag">妹纸 UI</a>
            <a href="" class="blog-tag">HTML5</a>
            <a href="" class="blog-tag">这是标签</a>
            <a href="" class="blog-tag">Impossible</a>
            <a href="" class="blog-tag">开源前端框架</a>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>么么哒</span></h2>
            <ul class="am-list">
                <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                <li><a href="#">我把最深沉的秘密放在那里。</a></li>
                <li><a href="#">你不懂我，我不怪你。</a></li>
                <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- content end -->



  <footer class="blog-footer">
    <div class="blog-text-center">©2018, Yuai. 	粤ICP备17148203号-1</div>
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