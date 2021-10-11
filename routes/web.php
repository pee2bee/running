<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'StaticPagesController@home')->name('home');//创建主页路由
Route::get('/help', 'StaticPagesController@help')->name('help');//帮助页路由
Route::get('/about','StaticPagesController@about')->name('about');//关于页路由
// 几个常见的HTTP 操作分别为 GET、POST、PATCH、DELETE。
// GET 常用于页面读取
// POST 常用于数据提交
// PATCH 常用于数据更新
// DELETE 常用于数据删除

Route::get('signup','UsersController@create')->name('signup');//signup 注册，签约;创建注册路由，转由用户控制器的create方法处理

Route::resource('users','UsersController');//resource 方法将遵从 RESTful 架构为用户资源生成路由。该方法接收两个参数，第一个参数为资源名称，第二个参数为控制器名称。
 //等同于以下路由：
    //Route::get('/users', 'UsersController@index')->name('users.index');
    // Route::get('/users/create', 'UsersController@create')->name('users.create');
    // Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    // Route::post('/users', 'UsersController@store')->name('users.store');
    // Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
    // Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
    // Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');





