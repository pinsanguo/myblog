@extends('layouts.master')
@section('head')
    <meta charset="gb2312">
    <title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
    <meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
    <meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
    <link href="{{asset('resources/views/Home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/Home/css/mood.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/Home/js/modernizr.js')}}"></script>
    <![endif]-->
@endsection
@section('content')
<div class="moodlist">
    <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">碎言碎语</a></h1>
    <div class="bloglist">
        <ul class="arrow_box">
            <div class="sy">
                <img src="{{asset('resources/views/Home/images/001.png')}}">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。</p>
            </div>
            <span class="dateview">2014-1-1</span>
        </ul>
        <ul class="arrow_box">
            <div class="sy">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
            </div>
            <span class="dateview">2014-1-1</span>
        </ul>
        <ul class="arrow_box">
            <div class="sy">
                <img src="images/001.png">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
                <span class="dateview">2014-1-1</span>
            </div>
        </ul>
    </div>
    <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
</div>
@endsection