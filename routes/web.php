<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::any( 'admin/login','Admin\LoginController@login' );
Route::get( 'admin/code','Admin\LoginController@code' );
//Route::get( 'admin/crypt','Admin\LoginController@crypt' );



Route::get( '/','Home\indexController@index' );
Route::group( ['prefix'=>'admin','namespace'=>'Admin','middleware'=>['web','admin.login']],function (){
    Route::get( '/','IndexController@index' );//首页
    Route::get( 'index','IndexController@index' );//首页
    Route::get( 'info','IndexController@info' ); //首页信息
    Route::get( 'logout','LoginController@logout' );//退出登录
    Route::any( 'pass','IndexController@pass' );//修改密码
    Route::post( 'cate/changeorder','CategoryController@changeOrder' );
    Route::resource('category','CategoryController');
    Route::resource('article','ArticleController');
    Route::resource('config','ConfigController');

    Route::any( 'upload','CommonController@upload');
});

Route::group( ['middleware'=>['web']],function (){

});