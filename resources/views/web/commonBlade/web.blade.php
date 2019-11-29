<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/index_file/css/amazeui.min.css">
    <link rel="stylesheet" href="/index_file/css/petshow.css?6">
    <link rel="stylesheet" href="/index_file/css/animate.min.css">
    <script src="/index_file/js/jquery.min.js"></script>
    <script src="/index_file/js/amazeui.min.js"></script>
    <script src="/index_file/js/countUp.min.js"></script>
    <script src="/index_file/js/amazeui.lazyload.min.js"></script>
</head>
<body>
<header class="am-topbar am-topbar-inverse">
    <div class="amz-container">
        <h1 class="am-topbar-brand">
            <a href="#" class="am-topbar-logo">
                <img src="/index_file/img/logo.png?1" alt="">
            </a>
        </h1>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
                data-am-collapse="{target: '#doc-topbar-collapse-5'}">
            <span class="am-sr-only">
                导航切换
            </span>
            <span class="am-icon-bars">
            </span>
        </button>
        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse-5">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li class="am-active">
                    <a href="#">
                        首页
                    </a>
                </li>
                <li class="am-dropdown" data-am-dropdown="">
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
                        发现萌宠
                        <span class="am-icon-caret-down">
                        </span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li>
                            <a href="#">
                                编辑推荐
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                人气排行
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                最新发布
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                语音涂鸦
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        萌宠趣闻
                    </a>
                </li>
                <li>
                    <a href="#">
                        萌宠专题
                    </a>
                </li>
                <li class="am-dropdown" data-am-dropdown="">
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
                        萌宠服务
                        <span class="am-icon-caret-down">
                        </span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li>
                            <a href="#">
                                宠物医院
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                宠物美容
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                宠物店铺
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                更多服务
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<div class="get">
    <div class="am-g">
        <div class="am-u-lg-12">
            <div class="get-title">
                <div class="get_font_left"><img src="/index_file/img/font_yjy.png" alt=""></div>
                <div class="get_font_center" id="banner_num"></div>
                <div class="get_font_rigth"><img src="/index_file/img/font_zty.png" alt=""></div>
            </div>
            <div class="font_line"><img src="/index_file/img/font_line.png" alt=""></div>
        </div>
    </div>
</div>
<div class="banner_navbg">
    <div class="am-g">
        <div class="banner_nav"><span class="am-icon-caret-right">  筛选：</span><a href="###">人气最高</a><a href="###"
                                                                                                       class="banner_hover">编辑推荐</a><a
                    href="###">最新萌宠</a><a href="###">语言涂鸦</a></div>
    </div>
</div>

@yield('content')

<footer class="am_footer">
    <div class="am_footer_con">
        <div class="am_footer_link">
            <span>关于宠物秀</span>
            <ul>
                <li><a href="###">关于我们</a></li>
                <li><a href="###">发展历程</a></li>
                <li><a href="###">友情链接</a></li>
            </ul>
        </div>

        <div class="am_footer_don">
            <span>宠物秀</span>
            <dl>
                <dt><img src="/index_file/img/footdon.png?1" alt=""></dt>
                <dd>一起Show我们的爱宠吧！宠物秀是图片配文字、涂鸦、COSPLAY的移动手机社区，这里有猫狗鱼龟兔子仓鼠龙猫等各种萌图。
                    <a href="###" class="footdon_pg ">
                        <div class="foot_d_pg am-icon-apple "> App store</div>
                    </a><a href="###" class="footdon_az animated">
                        <div class="foot_d_az am-icon-android "> Android</div>
                    </a></dd>

            </dl>
        </div>
    </div>
</footer>
<script src="/index_file/js/petshow.js"></script>
</body>
</html>