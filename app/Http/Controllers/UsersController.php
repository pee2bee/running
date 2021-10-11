<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //定义create方法
    public function create()
    {
        //返回注册页视图
        return view('users.create');
    }

//定义用户个人页面展示方法show()
/*     Laravel 会自动解析定义在控制器方法（变量名匹配路由片段）中的 Eloquent 模型类型声明。在上面代码中，由于 show() 方法传参时声明了类型 —— Eloquent 模型 User，对应的变量名 $user 会匹配路由片段中的 {user}，这样，Laravel 会自动注入与请求 URI 中传入的 ID 对应的用户模型实例。 */
/* 此功能称为 『隐性路由模型绑定』，是『约定优于配置』设计范式的体现，同时满足以下两种情况，此功能即会自动启用：

    1.路由声明时必须使用 Eloquent 模型的单数小写格式来作为路由片段参数，User 对应 {user}：
    Route::get('/users/{user}', 'UsersController@show')->name('users.show');
    2.控制器方法传参中必须包含对应的 Eloquent 模型类型声明，并且是有序的：
    public function show(User $user)
{
    return view('users.show', compact('user'));
}
当请求 running.test/users/1 并且满足以上两个条件时，Laravel 将会自动查找 ID 为 1 的用户并赋值到变量 $user 中，如果数据库中找不到对应的模型实例，会自动生成 HTTP 404 响应。
*/
    public function show(User $user)
    {
        //将用户对象 $user 通过 compact 方法转化为一个关联数组，并作为第二个参数传递给 view 方法，将数据与视图进行绑定。
        return view('users.show',compact('user'));
    }
}
