@extends('layouts.master')
@section('head')
    <meta charset="utf-8">
    <title>寻梦</title>
    <meta name="keywords" content="个人博客模板,博客模板" />
    <meta name="description" content="寻梦主题的个人博客模板，优雅、稳重、大气,低调。" />
    <link rel="shortcut icon" href="{{asset('resources/views/Home/favicon.ico')}}" />
    <link href="{{asset('resources/views/Home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/Home/css/index.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/Home/js/modernizr.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('resources/views/Home/dong/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('resources/views/Home/dong/style2.css')}}" />
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/jquery_1.js')}}'></script>
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/jquery.waypoints.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/jquery.stellar.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/superfish.js')}}'></script>
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/kratos.js')}}'></script>
    <script type='text/javascript' src='{{asset('resources/views/Home/dong/modernizr.js')}}'></script>
@endsection
@section('content')
    <div class="banner">
        <section class="box">
            <ul class="texts">
                <p>梦想还是要有的,</p>
                <p>万一实现了那。</p>
                <p></p>
            </ul>
            <div class="avatar"><a href="#"><span>小森</span></a> </div>
        </section>
    </div>
    <div class="template">
        <div class="box">
            <h3>
                <p><span>个人博客</span>精品推荐</p>
            </h3>
            <ul>
                <li><a href="/" target="_blank"><img src="{{asset('resources/views/Home/images/01.jpg')}}"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
                @foreach($art_info as $v)
                <li><a href="/" target="_blank"><img src="{{$v['arti_img']}}"></a><span>{{$v['arti_name']}}</span></li>
                @endforeach
                <!--<li><a href="/" target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
                <li><a href="/" target="_blank"><img src="images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>
                <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
                <li><a href="/" target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>-->
            </ul>
        </div>
    </div>
    <article>
        <h2 class="title_tj">
            <p>文章<span>推荐</span></p>
        </h2>
        <div class="bloglist left">
            @foreach($art_info2 as $m)
            <div class="kratos-hentry clearfix animate-box">
                <h3>{{$m['arti_name']}}</h3>
                <figure><img src="{{asset('resources/views/Home/images/001.png')}}"></figure>
                <ul>
                    <p>{{$m['arti_detail']}}</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>{{$m['arti_time']}}</span><span>作者：{{$m['arti_user']}}}</span><span>个人博客：[<a href="/news/life/">{{$m['arti_cate']}}</a>]</span></p>
            </div>
            @endforeach
            <div class="kratos-hentry clearfix animate-box">
                <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
                <figure><img src="images/001.png"></figure>
                <ul>
                    <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
            </div>
            <div class="kratos-hentry clearfix animate-box">
                <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
                <figure><img src="images/001.png"></figure>
                <ul>
                    <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
            </div>
            <div class="kratos-hentry clearfix animate-box">
                <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
                <figure><img src="images/001.png"></figure>
                <ul>
                    <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
            </div>
            <div class="kratos-hentry clearfix animate-box">
                <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
                <figure><img src="images/001.png"></figure>
                <ul>
                    <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
            </div>
            <div class="kratos-hentry clearfix animate-box">
                <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
                <figure><img src="images/001.png"></figure>
                <ul>
                    <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
            </div>

        </div>
        <aside class="right ">
            <div class="weather kratos-hentry clearfix animate-box" ><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
            <div class="news">
                <h3 class="kratos-hentry clearfix animate-box">
                    <p>最新<span>文章</span></p>
                </h3>
                <ul class="rank kratos-hentry clearfix animate-box">
                    <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                    <li><a href="/" title="with love for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                    <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                    <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                    <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
                    <li><a href="/" title="建站流程篇——教你如何快速学会做网站" target="_blank">建站流程篇——教你如何快速学会做网站</a></li>
                    <li><a href="/" title="box-shadow 阴影右下脚折边效果" target="_blank">box-shadow 阴影右下脚折边效果</a></li>
                    <li><a href="/" title="打雷时室内、户外应该需要注意什么" target="_blank">打雷时室内、户外应该需要注意什么</a></li>
                </ul>
                <h3 class="ph kratos-hentry clearfix animate-box">
                    <p>点击<span>排行</span></p>
                </h3>
                <ul class="paih kratos-hentry clearfix animate-box">
                    <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                    <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                    <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                    <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                    <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
                </ul>
                <h3 class="links kratos-hentry clearfix animate-box">
                    <p>友情<span>链接</span></p>
                </h3>
                <ul class="website kratos-hentry clearfix animate-box">
                    <li><a href="/">个人博客</a></li>
                    <li><a href="/">谢泽文个人博客</a></li>
                    <li><a href="/">3DST技术网</a></li>
                    <li><a href="/">思衡网络</a></li>
                </ul>
            </div>
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare kratos-hentry clearfix animate-box"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
            </script>
            <!-- Baidu Button END -->
            <a href="/" class="weixin kratos-hentry clearfix animate-box"> </a></aside>
    </article>
@endsection