@extends('layouts.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页1</a> &raquo; <a href="#">文章管理</a> &raquo; 文章列表
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <th class="tc">排序</th>
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>审核状态</th>
                        <th>点击</th>
                        <th>发布人</th>
                        <th>更新时间</th>
                        <th>评论</th>
                        <th>操作</th>
                    </tr>
                    @foreach($info as $n)
                        <tr>
                            <td class="tc"><input type="checkbox" name="id[]" value="{{$n['arti_id']}}"></td>
                            <td class="tc">
                                <input type="text" name="ord[]" value="{{$n['arti_order']}}">
                            </td>
                            <td class="tc">{{$n['arti_id']}}</td>
                            <td>
                                <a href="#">{{$n['arti_name']}}</a>
                            </td>
                            <td>{{$n['arti_state']}}</td>
                            <td>{{$n['arti_click']}}</td>
                            <td>{{$n['arti_user']}}</td>
                            <td>{{$n['arti_time']}}</td>
                            <td>{{$n['arti_common']}}</td>
                            <td>
                                <a href="{{URL('admin/article/'.$n['arti_id'].'/edit')}}">修改</a>
                                <a href="#">删除</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div class="page_nav">
                    <div>
                        {!! $info->render() !!}
                    </div>
                </div>
                <style>
                    .page_nav a, .page_nav span{
                        font-size: 15px;
                        padding: 6px 12px;
                    }
                    .result_content ul li {
                        line-height: 30px;
                    }
                </style>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
@endsection