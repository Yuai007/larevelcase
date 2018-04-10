@extends('layouts.admin')
@section('content')
    <div class="admin-biaogelist" style="top:0px;left:0px;">

        <div class="listbiaoti am-cf">
            <ul class="am-icon-flag on"> 栏目名称</ul>

            <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">商品列表</a></dl>



        </div>

        <div class="fbneirong">
            <form class="am-form">
                <div class="am-form-group am-cf">
                    <div class="zuo">标题：</div>
                    <div class="you">
                        <input type="text" class="am-input-sm"  id="doc-ipt-email-1" name="title" value="{{$field -> title}}" placeholder="请输入标题">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">关键词：</div>
                    <div class="you">
                        <input type="text" class="am-input-sm" id="doc-ipt-pwd-1" name="title" value="{{$field -> title}}" placeholder="请输入关键词">
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">类型：</div>
                    <div class="you">
                        <select data-am-selected="{btnWidth: 170, btnSize: 'm', btnStyle: 'default'}">
                            <option value="a" >-The.CC</option>
                            <option value="b" selected>夕风色</option>
                            <option value="o">Orange</option>
                        </select>
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">描述：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">产品图片：</div>
                    <div class="you">
                        <div class="am-form-group am-form-file">
                            <div class="tpl-form-file-img">
                                <img src="assets/img/a5.png" alt="">
                            </div>
                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                            <input id="doc-form-file" type="file" multiple>
                            <p class="am-form-help">请选择要上传的文件...</p>

                        </div>

                    </div>
                </div>

                <div class="am-form-group am-cf">
                    <div class="zuo">内容：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>
                <div class="am-form-group am-cf">
                    <div class="zuo">其他信息：</div>
                    <div class="you">
                        <textarea class="" rows="2" id="doc-ta-1"></textarea>
                    </div>
                </div>


                <div class="am-form-group am-cf">
                    <div class="you" style="margin-left: 11%;">
                        <button type="submit" class="am-btn am-btn-success am-radius">发布并关闭窗口</button>&nbsp;  &raquo; &nbsp; <button type="submit" class="am-btn am-btn-secondary am-radius">发布并继续发布</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection