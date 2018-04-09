@extends('layouts.admin')
@section('content')
    <div class="admin-biaogelist" style="top:0px;left:0px;">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 文章列表</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">文章列表</a></dl>

            <dl>
                <button type="button" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus"> 添加文章</button>
            </dl>


        </div>

        <div class="am-btn-toolbars am-btn-toolbar am-kg am-cf">
            <ul>
                <li>
                    <div class="am-btn-group am-btn-group-xs">
                        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
                            <option value="b">产品分类</option>
                            <option value="o">下架</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="am-btn-group am-btn-group-xs">
                        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
                            <option value="b">产品分类</option>
                            <option value="o">下架</option>
                        </select>
                    </div>
                </li>
                <li style="margin-right: 0;">
                    <span class="tubiao am-icon-calendar"></span>
                    <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar"
                           placeholder="开始日期" data-am-datepicker="{theme: 'success',}" readonly/>
                </li>
                <li style="margin-left: -4px;">
                    <span class="tubiao am-icon-calendar"></span>
                    <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar"
                           placeholder="开始日期" data-am-datepicker="{theme: 'success',}" readonly/>
                </li>

                <li style="margin-left: -10px;">
                    <div class="am-btn-group am-btn-group-xs">
                        <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
                            <option value="b">产品分类</option>
                            <option value="o">下架</option>
                        </select>
                    </div>
                </li>
                <li><input type="text" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索"/></li>
                <li>
                    <button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">
                        搜索
                    </button>
                </li>
            </ul>
        </div>


        <form class="am-form am-g">
            <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
                <thead>
                <tr class="am-success">
                    <th class="table-check"><input type="checkbox"/></th>
                    <th class="table-id">排序</th>
                    <th class="table-id">ID</th>
                    <th class="table-title">标题</th>
                    <th class="table-type">类别</th>
                    <th class="table-author am-hide-sm-only">启用/非启用 <i class="am-icon-check am-text-warning"></i> <i
                                class="am-icon-close am-text-primary"></i></th>
                    <th class="table-date am-hide-sm-only">修改日期</th>
                    <th width="163px" class="table-set">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <td><input type="checkbox"/></td>
                        <td><input type="text" class="am-form-field am-radius am-input-sm" value="{{$list -> order}}"></td>
                        <td>{{$list -> id}}</td>
                        <td><a href="#">{{$list -> title}}</a></td>
                        <td>{{$list -> parent}}</td>
                        <td class="am-hide-sm-only">
                            @if(($list -> status) == 1)
                                <i class="am-icon-check am-text-warning"></i>
                            @else
                                <i class="am-icon-close am-text-primary"></i>
                            @endif
                        </td>
                        <td class="am-hide-sm-only">{{$list -> updated_at}}</td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span
                                                class="am-icon-search"></span></a>
                                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" href="{{route('article.edit', $list->id)}}"><span
                                                class="am-icon-pencil-square-o"></span>
                                        </a>
                                    <a class="am-btn am-btn-default am-btn-xs am-text-warning  am-round"><span
                                                class="am-icon-copy"></span></a>
                                    <a class="am-btn am-btn-default am-btn-xs am-text-danger am-round"><span
                                                class="am-icon-trash-o" href="javascript:;" onclick="delArt( {{$list->id}} )"></span></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 删除</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 移动</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 移动</button>
                <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
            {{$lists->links()}}
            <ul class="am-pagination am-fr">

                {{--<li class="am-disabled"><a href="#">«</a></li>--}}
                {{--<li class="am-active"><a href="#">1</a></li>--}}
                {{--<li><a href="#">2</a></li>--}}
                {{--<li><a href="#">3</a></li>--}}
                {{--<li><a href="#">4</a></li>--}}
                {{--<li><a href="#">5</a></li>--}}
                {{--<li><a href="#">»</a></li>--}}
            </ul>


            <hr/>
            <p></p>
        </form>
    </div>
    <script>
        function delArt( art_id ){
            //询问框
            layer.confirm('你确定要删除这编文章吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $.post( "{{url( 'admin/article/' )}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function(e){
//                alert( e.msg );
//                layer.msg(e.msg, {icon: 1});
                    if( e.code==0 ){
                        layer.msg(e.msg, {icon: 6});
                        location.href = location.href;
                    }else{
                        layer.msg(e.msg, {icon: 5});
                    }
                });
//            layer.msg('的确很重要', {icon: 1});
            }, function(){
//            layer.msg('也可以这样', {
//                time: 20000, //20s后自动关闭
//                btn: ['明白了', '知道了']
//            });
            });
        }
    </script>
@endsection