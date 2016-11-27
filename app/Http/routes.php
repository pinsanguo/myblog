<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','IndexController@index');//首页路由
Route::get('/index','IndexController@index');
Route::get('/layout','IndexController@layout');
//前台路由
Route::get('/xiaosen','IndexController@xiaosen');
Route::get('/moodlist','IndexController@moodlist');
Route::get('/share','IndexController@share');
Route::get('/book','IndexController@book');
Route::get('/knowledge','IndexController@knowledge');
Route::get('/about','IndexController@about');



//Route::get('/','IndexController@index');
Route::group(['middleware' => ['web']], function () {

});

//后台路由
Route::group(['middleware' => ['admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::any('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::any('pass','IndexController@pass');
    Route::get('quit','LoginController@quit');

    Route::any('tree','CategoryController@tree');
    Route::any('upload','CommonController@uploadify');//上传图片

    Route::resource('category', 'CategoryController');//分类路由
    Route::resource('article','ArticleController');//文章路由

    Route::resource('link','LinkController');//友情链接
    Route::resource('nav','NavController');//自定义导航栏
});
//后台登录路由
Route::any('admin/','Admin\IndexController@index');
Route::any('admin/login','Admin\LoginController@login');
Route::get('admin/code','Admin\LoginController@code');
Route::get('admin/getcode','Admin\LoginController@getcode');
