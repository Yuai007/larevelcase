@extends( 'layouts.admin' )
@section( 'content' )
<header class="am-topbar admin-header">
    <div class="am-topbar-brand"><img src="{{asset(  'admin/assets/i/logo.png' )}}"></div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">
            <li class="kuanjie">

                <a href="{{url('admin/category')}}" target="main">文章管理</a>
                <a href="" target="main">个人中心</a>
                <a href="{{url('admin/logout')}}">退出登录</a>
            </li>
            <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">

    <div class="nav-navicon admin-main admin-sidebar">


        <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：</div>
        <div class="sideMenu">
            <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
            <ul>
                <li><a href="{{url('admin/category')}}" target="main">文章列表</a></li>
            </ul>
            <h3 class="am-icon-gears"><em></em> <a href="">系统设置</a></h3>
            <ul>
                <li><a href="{{url('admin/pass')}}" target="main">个人中心</a></li>
                <li><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>
                <li><a href="{{url('admin/pass')}}" target="main">系统配置</a></li>
                <li><a href="{{url('admin/pass')}}" target="main">其他</a></li>

            </ul>
        </div>
        <!-- sideMenu End -->

        <script type="text/javascript">
            jQuery(".sideMenu").slide({
                titCell:"h3", //鼠标触发对象
                targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
                effect:"slideDown", //targetCell下拉效果
                delayTime:300 , //效果时间
                triggerTime:500, //鼠标延迟触发时间（默认150）
                defaultPlay:true,//默认是否执行效果（默认true）
                returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
            });
        </script>
    </div>

    <div class=" admin-content">
        <div class="daohang">
            <ul>
                <li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> <a href="{{url('admin/index')}}">首页</a> </li>
            </ul>
        </div>
        <div class="admin">

            <iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
            {{--<div class="foods">--}}
                {{--<ul>版权所有@2015</ul>--}}
                {{--<dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>--}}
            {{--</div>--}}
        </div>
    </div>




</div>


@endsection



