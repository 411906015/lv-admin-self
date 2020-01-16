<?php

use Illuminate\Http\Request;


header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求
//    header("Access-Control-Allow-Origin: http://a.com"); // 允许a.com发起的跨域请求
//如果需要设置允许所有域名发起的跨域请求，可以使用通配符 *

//    header('Access-Control-Allow-Headers: *');
//    header("Access-Control-Allow-Origin: *");
//    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

Route::group([ 'namespace' => 'ElectronApi','prefix'=>'electronApi'], function ($router) {

    //用户是否登录
    Route::any('/user/checkLogin', 'LoginController@checkLogin');
    //用户登录
    Route::any('/user/login', 'LoginController@login');

    //获得我的项目列表
    Route::any('/myProject/list', 'ProjectController@getMyProjectList');
});


Route::group([ 'namespace' => 'ElectronApi','prefix'=>'electronApi','middleware'=>'CheckElenoteId'], function ($router) {

    //修改密码
    Route::any('/user/edit-password', 'UserDataController@editPassWord');
});