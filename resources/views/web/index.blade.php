@extends('web.commonBlade.web')

@section('banner')
    @include('web.commonBlade.banner')
@endsection
@section('content')
    <div class="banner_navbg">
        <div class="am-g">
            <div class="banner_nav">
                <span class="am-icon-caret-right">筛选：</span>
                <a href="###" class="banner_hover">人气最高</a>
                <a href="###" >编辑推荐</a>
                <a href="###">最新萌宠</a>
                <a href="###">语言涂鸦</a>
            </div>
        </div>
    </div>
    <div class="am-g am-imglist">
        <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-3 am-avg-lg-6 am-gallery-default">
            <li>
                <div class="am-gallery-item am_list_block">
                    <a href="###" class="am_img_bg">
                        <img class="am_img" src="/index_file/img/loading.gif"
                             data-original="http://img.petshow.cc/pet_show/2015_08/6d3c22171da582f569702bad45d9a4c6.jpg"
                             alt=""/>
                    </a>
                    <div class="am_listimg_info">
                        <span class="am-icon-heart"> 132</span>
                        <span class="am-icon-comments"> 67</span>
                        <span class="am_imglist_time">15分钟前</span>
                    </div>
                </div>
                <a class="am_imglist_user" href="/">
                    <span class="am_imglist_user_ico"><img src="/index_file/img/tx.jpg" alt=""></span>
                    <span class="am_imglist_user_font">路见不平Eason吼</span>
                </a>
            </li>
        </ul>
    </div>
@endsection
