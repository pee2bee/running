{{-- 先声明文档类型，doctype 文档类型 --}}
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','running App') - Laravel 入门二刷</title>
    {{-- Laravel 在运行时，是以 public 文件夹为根目录的，因此我们可以使用下面这行代码来为 Laravel 引入样式： --}}
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    {{-- navbar 导航栏 --}}
    <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">running App</a>
        <u1 class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
          <il class="nav-item"><a class="nav-link" href="#">登录</a></il>
        </u1>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

























