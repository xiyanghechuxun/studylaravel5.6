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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'StaticPagesController@home');			//主页
Route::get('/help','StaticPagesController@help')->name('help');		//帮助页
Route::get('/about','StaticPagesController@about');		//关于页

Route::get('/signup','UserController@create');			//注册页面

//用戶資源路由
Route::resource('users','UserController');	

/**
 * 登陆、退出
 */
//登陆页面
Route::get('login','SessionsController@create')->name('login');
//登陆
Route::post('login','SessionsController@store');
//退出
Route::delete('logout','SessionsController@destroy');


