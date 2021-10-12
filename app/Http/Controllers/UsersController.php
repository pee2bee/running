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

 /*    用于处理表单数据提交后的 store 方法，用于处理用户创建的相关逻辑 */
    public function store(Request $request)
    {
    /*
    1.存在性验证:在用户填写表单的时候，我们会要求用户必须填写上自己的用户名，当用户名为空时将注册失败。
    这时我们可以使用 required 来验证用户名是否为空(required 必需的)

    2.唯一性验证：验证新用户的用户名或邮箱是否已被使用，用unique验证，针对user表(unique 独一无二的)
        使用形式：'要验证的字段'=>'unique:数据表'
        *邮箱验证需要更谨慎：一开始创建 用户数据表 时就要设置邮箱字段的唯一属性。这个 Laravel 在默认给我们生成的用户表迁移文件中便已经默认设定好了。
    3.长度验证：min和max 来限制用所填写字段的最小长度和最大长度。

    4.格式验证：邮箱格式直接用'email'验证即可
    */

        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6'
        ]);
        return;
    }










}