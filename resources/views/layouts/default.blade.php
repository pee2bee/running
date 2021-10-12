{{-- 全局通用视图 --}}

{{-- 先声明文档类型，doctype 文档类型 --}}
<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','running App') - Laravel 入门二刷</title>

    {{-- Laravel 在运行时，是以 public 文件夹为根目录的，因此我们可以使用下面这行代码来为 Laravel 引入样式： --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

  </head>
  <body>
    {{-- 引入头部导航栏 --}}
    @include('layouts._header')


    <div class="container">
      <div class="offset-md-1 col-md-10">

        {{-- 引入消息提醒视图 --}}
        @include('shared._messages')

        @yield('content')

        {{-- 引入底部视图 --}}
        @include('layouts._footer')

      </div>
    </div>

    {{-- 引用编译后的 app.js 文件,使下拉式菜单能被打开 --}}
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>

























