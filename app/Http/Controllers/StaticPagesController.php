<?php
//namespace 代表的是 命名空间，这是在 PHP 5.3 之后才加入的语言特性，如果你之前学习过 Java 或 C# 的话，那么你应该对命名空间不陌生。简单来说，开发者可以利用命名空间来区分归类不同的代码功能，避免引起变量名或函数名的冲突。你可以把命名空间理解为文件路径，把变量名理解为文件。当我们在不同路径分别存放了相同的文件时，系统就不会出现冲突。
namespace App\Http\Controllers;

//use 引用在 PHP 文件中要使用的类，引用之后便可以对其进行调用
use Illuminate\Http\Request;


//定义了一个 StaticPagesController 类，这个类继承了父类 App\Http\Controllers\Controller，这意味着你可以在 StaticPagesController 类中任意使用父类中除私密方法外的其它方法
class StaticPagesController extends Controller
{
    //设置home方法来处理route发来的访问主页请求
    public function home()
    {
        return view('static_pages/home');
    }

    //设置help方法来处理route发来的访问帮助页请求
    public function help()
    {
        return view('static_pages/help');
    }

    //设置about方法来处理route发来的访问关于页请求
    public function about()
    {
        return view('static_pages/about');
    }

    //

}
