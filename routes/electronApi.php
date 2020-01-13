<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([ 'namespace' => 'ElectronApi','prefix'=>'electronApi'], function ($router) {
//    header("Access-Control-Allow-Origin: http://a.com"); // 允许a.com发起的跨域请求
//如果需要设置允许所有域名发起的跨域请求，可以使用通配符 *
    header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求
//    header('Access-Control-Allow-Headers: *');
//    header("Access-Control-Allow-Origin: *");
//    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    //用户是否登录
    Route::any('/user/checkLogin', 'LoginController@checkLogin');
    //用户登录
    Route::any('/user/login', 'LoginController@login');




    //获得我的项目列表
    Route::any('/myProject/list', 'ProjectController@getMyProjectList');
});