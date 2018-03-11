@extends( 'layouts.admin' )
@section( 'content' )
    <div class="admin-biaogelist" style="top:0px;left:0px;">
    <div class="listbiaoti am-cf">
        <ul class="am-icon-flag on"> 栏目名称</ul>

        <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 >
            <a href="{{url('admin/category')}}">文章列表</a>
        </dl>

        <dl>
            <a type="button" href="{{url('admin/caregory/create')}}" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus">添加产品</a>
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
                <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}" readonly/>
            </li>
            <li style="margin-left: -4px;">
                <span class="tubiao am-icon-calendar"></span>
                <input type="text" class="am-form-field am-input-sm am-input-zm  am-icon-calendar" placeholder="开始日期" data-am-datepicker="{theme: 'success',}" readonly/>
            </li>

            <li style="margin-left: -10px;">
                <div class="am-btn-group am-btn-group-xs">
                    <select data-am-selected="{btnWidth: 90, btnSize: 'sm', btnStyle: 'default'}">
                        <option value="b">产品分类</option>
                        <option value="o">下架</option>
                    </select>
                </div>
            </li>
            <li>
                <input type="text" class="am-form-field am-input-sm am-input-xm" placeholder="关键词搜索" />
            </li>
            <li>
                <button type="button" class="am-btn am-radius am-btn-xs am-btn-success" style="margin-top: -1px;">搜索</button>
            </li>
        </ul>
    </div>


    <form class="am-form am-g">
        <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
            <tr class="am-success">
                <th class="table-check">
                    <input type="checkbox" />
                </th>
                <th class="table-id">排序</th>
                <th class="table-id">ID</th>
                <th class="table-title">分类名称</th>
                <th class="table-title">标题</th>
                <th class="table-type">点击</th>
                <th class="table-author am-hide-sm-only">状态</th>
                <th class="table-date am-hide-sm-only">修改日期</th>
                <th width="163px" class="table-set">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $vo)
            <tr>
                <td>
                    <input type="checkbox" />
                </td>
                <td>
                    <input type="text"  value="{{$vo->cate_order}}" class="am-form-field am-radius am-input-sm" />
                </td>
                <td>{{$vo->id}}</td>
                <td>
                    <a>{{$vo->cate_name}}</a>
                </td>
                <td>
                    {{$vo->cate_title}}
                </td>
                <td>{{$vo->cate_view}}</td>
                <td class="am-hide-sm-only">
                    @if(($vo->status) == 1)
                        <i class="am-icon-check am-text-warning"></i>
                    @else
                        <i class="am-icon-close am-text-primary"></i>
                    @endif
                </td>
                <td class="am-hide-sm-only">{{$vo->updated_at}}</td>
                <td>
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <a class="am-btn am-btn-default am-btn-xs am-text-success am-round">
                                <span class="am-icon-search"></span>
                            </a>
                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary am-round">
                                <span class="am-icon-pencil-square-o"></span>
                            </button>
                            <a class="am-btn am-btn-default am-btn-xs am-text-warning  am-round">
                                <span class="am-icon-copy"></span>
                            </a>
                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-round">
                                <span class="am-icon-trash-o"></span>
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default">
                <span class="am-icon-plus"></span> 删除</button>
            <button type="button" class="am-btn am-btn-default">
                <span class="am-icon-save"></span> 上架</button>
            <button type="button" class="am-btn am-btn-default">
                <span class="am-icon-save"></span> 下架</button>
            <button type="button" class="am-btn am-btn-default">
                <span class="am-icon-save"></span> 保存</button>
            <button type="button" class="am-btn am-btn-default">
                <span class="am-icon-trash-o"></span> 删除</button>
        </div>

        <ul class="am-pagination am-fr">
            <li class="am-disabled">
                <a href="#">«</a>
            </li>
            <li class="am-active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">»</a>
            </li>
        </ul>




        <hr />

    </form>
    </div>

@endsection



