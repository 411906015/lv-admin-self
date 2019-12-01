<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>my-lv-admin</title>
    @include('web.commonBlade.header')
    @yield('header')
</head>
<body>
<header class="am-topbar am-topbar-inverse">
    <div class="amz-container">
        <h1 class="am-topbar-brand">
            <a href="/" class="am-topbar-logo">
                <img src="/index_file/img/logo.png" alt="">
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
                    <a href="/">
                        首页
                    </a>
                </li>
                <li class="am-dropdown" data-am-dropdown="">
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle="" href="javascript:;">
                        发现萌宠
                        <span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li>
                            <a href="">
                                编辑推荐
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        萌宠趣闻
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
@yield('banner')
@yield('content')
@include('web.commonBlade.footer')
<script src="/index_file/js/petshow.js"></script>
@yield('scriptFile')
</body>
</html>