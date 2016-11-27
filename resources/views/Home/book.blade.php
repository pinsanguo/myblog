@extends('layouts.master)
@section('head')
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>留言板</title>
    <style>
        .liuyanban{
            width:960px;
            margin:0 auto;
        }
    </style>
@endsection
@section('content')
<div class="liuyanban">
    <!-- 多说评论框 start -->
    <div class="ds-thread" data-thread-key="2" data-title="留言板" data-url="http://www.wangsenphp.cn/book.html"></div>
    <!-- 多说评论框 end -->
    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">
        var duoshuoQuery = {short_name:"xiaosenphp"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0]
            || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
    </script>
    <!-- 多说公共JS代码 end -->
</div>
@endsection
