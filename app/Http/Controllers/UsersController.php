<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //定义create方法
    public function create()
    {
        //返回注册页视图
        return view('users.create');
    }
}
