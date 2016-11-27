@extends('layouts.admin')
@section('content')
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">文章管理</a> &raquo; 修改文章
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="#"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>文章列表</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/article/'.$arti_info->arti_id.'')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>文章类别：</th>
                <td>
                    <select name="arti_cate">
                        <option value="">==请选择==</option>
                        @foreach($info as $v)
                            <option value="{{$v['cate_name']}}"
                                @if($v['cate_name'] == $arti_info['arti_cate'])
                                    selected
                                @endif
                            >{{$v['cate_name']}}</option>
                            @foreach($v['child'] as $m)
                                <option value="{{$m['cate_name']}}"
                                     @if($m['cate_name'] == $arti_info['arti_cate'])
                                        selected
                                     @endif
                                >├──{{$m['cate_name']}}</option>
                                @foreach($m['child'] as $i)
                                    <option value="{{$i['cate_name']}}"
                                         @if($i['cate_name'] == $arti_info['arti_cate'])
                                            selected
                                         @endif
                                    >├────{{$i['cate_name']}}</option>
                                @endforeach
                            @endforeach
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>标题：</th>
                <td>
                    <input type="text" class="lg" name="arti_name" value="{{$arti_info['arti_name']}}">
                    <p>标题可以写30个字</p>
                </td>
            </tr>
            <tr>
                <th>作者：</th>
                <td>
                    <input type="text" name="arti_user" value="{{$arti_info['arti_user']}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                </td>
            </tr>
            {{--引入上传图片插件--}}

            <script type="text/javascript">
                <?php $timestamp = time();?>
                $(function() {
                    $('#file_upload').uploadify({
                        'buttonText' : '图片上传',
                        'formData'     : {
                            'timestamp' : '<?php echo $timestamp;?>',
                            '_token'     : '{{csrf_token()}}'
                        },
                        'swf'      : '{{asset("resources/org/uploadify/uploadify.swf")}}',
                        'uploader' : '{{url('admin/uploadify')}}',
                        'onUploadSuccess' : function(file, data, response) {
                            $('input[name=arti_img]').val(data);
                            $('#art_thumb_img').attr('src','/'+data);
//                                    alert(data);
                        }
                    });
                });
            </script>
            <style>
                .uploadify{display:inline-block;}
                .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
            </style>
            <tr>
                <th><i class="require">*</i>缩略图：</th>
                <td>
                    <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
                    <script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                    <input type="text" size="50" name="arti_img" value="{{$arti_info['arti_img']}}">
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <img alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;" src="/{{$arti_info['arti_img']}}">
                </td>
            </tr>
            {{--引入在线编辑器--}}
            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"></script>
            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
            <script type="text/javascript">
                var ue = UE.getEditor('editor');
            </script>
            <style>
                .edui-default{line-height: 28px;}
                div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                {overflow: hidden; height:20px;}
                div.edui-box{overflow: hidden; height:22px;}
            </style>
            <tr>
                <th>文章内容：</th>
                <td>
                    <textarea name="arti_content" id="editor">{{$arti_info['arti_content']}}</textarea>
                </td>
            </tr>
            <tr>
                <th>文章简介：</th>
                <td>
                    <textarea name="arti_detail">{{$arti_info['arti_detail']}}</textarea>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>发布时间：</th>
                <td>
                    <input type="text" class="sm" name="arti_time" value="{{$arti_info['arti_time']}}" style="width:150px;">
                    <span><i class="fa fa-exclamation-circle yellow"></i>不填写，则自动生成</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>文章排序：</th>
                <td>
                    <input type="text" class="sm" name="arti_order" value="{{$arti_info['arti_order']}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>文章排序</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>点击次数：</th>
                <td>
                    <input type="text" class="sm" name="arti_click" value="{{$arti_info['arti_click']}}">
                    <span><i class="fa fa-exclamation-circle yellow"></i>可自动生成，不用填写</span>
                </td>
            </tr>
            <tr>
                <th>文章位置：</th>
                <td>
                    <label for=""><input type="radio" name="arti_view" value="1"
                        @if($arti_info['arti_view'] == 1)
                            checked
                        @endif
                    >首页推荐</label>
                    <label for=""><input type="radio" name="arti_view" value="2"
                        @if($arti_info['arti_view'] == 2)
                            checked
                        @endif
                    >首页文章</label>
                </td>
            </tr>
            <tr>
                <th>文章状态：</th>
                <td>
                    <label for=""><input type="radio" name="arti_state" value="1"
                                         @if($arti_info['arti_state'] == 1)
                                         checked
                                @endif
                        >开启</label>
                    <label for=""><input type="radio" name="arti_state" value="0"
                                         @if($arti_info['arti_state'] == 0)
                                         checked
                                @endif
                        >关闭</label>
                </td>
            </tr>
            <tr>
                <th>文章评论：</th>
                <td>
                    <textarea name="arti_common">{{$arti_info['arti_common']}}</textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection