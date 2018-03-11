<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset(  'admin/assets1/i/favicon.png' )}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset(  'admin/assets1/i/app-icon72x72@2x.png' )}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset(  'admin/assets1/css/amazeui.min.css' )}}" />
    <link rel="stylesheet" href="{{asset(  'admin/assets1/css/admin.css' )}}">
    <link rel="stylesheet" href="{{asset(  'admin/assets1/css/app.css' )}}">
</head>

<body data-type="login">

<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                Amaze UI<span> Login</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            @if(session( 'msg' ))
                {{session( 'msg' )}}
            @endif
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form">
                <fieldset>
                    <div class="am-form-group" action="" method="post">
                        {!! csrf_field() !!}
                        <input type="text" class="" name="name" id="doc-ipt-email-1" value="{{ session( 'oldusername' ) }}" placeholder="输入用户名">
                    </div>
                    <div class="am-form-group">
                        <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="请输入密码">
                    </div>
                    <p><button type="submit" class="am-btn am-btn-default">登录</button></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="{{asset(  'admin/assets1/js/jquery.min.js' )}}"></script>
<script src="{{asset(  'admin/assets1/js/amazeui.min.js' )}}"></script>
<script src="{{asset(  'admin/assets1/js/app.js' )}}"></script>
</body>

</html>