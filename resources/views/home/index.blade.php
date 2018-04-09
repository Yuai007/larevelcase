@extends( 'layouts.home' )
@section( 'content' )
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-12 am-u-sm-12">
        @foreach($lists as $list)
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="{{$list -> topimage}}" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="" class="blog-color">{{$list -> parent}} &nbsp;</a></span>
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
            {{$lists->links()}}
            {{--<li class="am-pagination-prev"><a href="">&laquo; Prev</a></li>--}}
            {{--<li class="am-pagination-next"><a href="">Next &raquo;</a></li>--}}
        </ul>
    </div>
</div>
<!-- content end -->
@endsection