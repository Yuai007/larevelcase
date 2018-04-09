@extends('layouts.admin')
@section('content')
    <div class="admin-biaogelist" style="top:0px;left:0px;">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 系统配置</ul>

            <dl class="am-icon-home" style="float: right;">当前位置： 首页 > <a href="">系统配置</a></dl>


        </div>

        <form class="am-form" method="post" action="">
            {!! csrf_field() !!}
        <div class="am-tabs am-margin" data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
                <li class="am-active"><a href="#tab1">基本配置</a></li>
            </ul>
            <div class="am-tabs-bd">
                <div class="am-tab-panel am-fade am-in am-active" id="tab1">
                        @foreach($lists as $list)
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    {{$list -> title}}
                                </div>
                                @switch($list->valuetype)
                                    @case(1)
                                        <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                            <input type="text" class="am-input-sm" name="{{$list->name}}" value="{{$list->value}}">
                                        </div>
                                    @break
                                    @case(2)
                                        <div class="am-u-sm-8 am-u-md-4 am-u-end">
                                            <textarea rows="4"  name="{{$list->name}}">{{$list->value}}</textarea>
                                        </div>
                                    @break

                                @endswitch
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
        <div class="am-margin">
            <button type="submit" class="am-btn am-btn-success am-radius ">提交保存</button>
            <button type="button" class="am-btn am-btn-primary am-radius ">放弃保存</button>
        </div>
        </form>

    </div>
@endsection