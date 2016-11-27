@extends('layouts.admin')
@section('content')
<!--头部 开始-->
<div class="top_box">
    <div class="top_left">
        <div class="logo">后台管理模板</div>
        <ul>
            <li><a href="{{URL('/')}}" class="active" target="black">首页</a></li>
            <li><a href="{{URL('admin/info')}}" target="main">管理页</a></li>
        </ul>
    </div>
    <div class="top_right">
        <ul>
            <li>管理员：admin</li>
            <li><a href="{{URL('admin/pass')}}" target="main">修改密码</a></li>
            <li><a href="{{URL('admin/quit')}}">退出</a></li>
        </ul>
    </div>
</div>
<!--头部 结束-->

<!--左侧导航 开始-->
<div class="menu_box">
    <ul>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>内容管理</h3>
            <ul class="sub_menu">
                <li><a href="{{URL('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
                <li><a href="{{URL('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>列表页</a></li>
                <li><a href="{{URL('admin/article/create')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>添加文章</a></li>
                <li><a href="{{URL('admin/article')}}" target="main"><i class="fa fa-fw fa-image"></i>文章列表</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
            <ul class="sub_menu">
                <li><a href="{{URL('admin/link')}}" target="main"><i class="fa fa-fw fa-cubes"></i>友情链接</a></li>
                <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>自定义导航</a></li>
                <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
            <ul class="sub_menu">
                <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--左侧导航 结束-->

<!--主体部分 开始-->
<div class="main_box">
    <iframe src="{{URL('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>
<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
    CopyRight © 2016. Powered By <a href="http://www.wangsenphp.cn">小森blog</a>.
</div>
<!--底部 结束-->
@endsection