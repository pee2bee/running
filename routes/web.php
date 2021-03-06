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

Route::get('login','SessionsController@create')->name('login');//显示登录页面
Route::post('login','SessionsController@store')->name('login');//创建新会话(登录)
Route::delete('logout','SessionsController@destroy')->name('logout');//销毁会话(退出登录)

Route::get('signup/confirm/{token}','UsersController@confirmEmail')->name('confirm_email');//为用户的激活功能设定好路由，该路由将附带用户生成的激活令牌，在用户点击链接进行激活之后，将激活令牌通过路由参数传给控制器的指定动作



Route::get('password/reset',  'PasswordController@showLinkRequestForm')->name('password.request');//填写 Email 的表单
Route::post('password/email',  'PasswordController@sendResetLinkEmail')->name('password.email');//处理表单提交，成功的话就发送邮件，附带 Token 的链接
Route::get('password/reset/{token}',  'PasswordController@showResetForm')->name('password.reset');//显示更新密码的表单，包含 token
Route::post('password/reset','PasswordController@reset')->name('password.update');//对提交过来的 token 和 email 数据进行配对，正确的话更新密码
