{{-- 登录视图 --}}

{{-- 引入通用视图 --}}
@extends('layouts.default')

{{-- 输入网址标题 --}}
@section('title','登录')

{{-- 填充内容 --}}
@section('content')

{{-- 第一层 offset-md-2 就是指偏移2列，直接空出来，从第三列开始 --}}
  <div class="offset-md-2 col-md-8">

    {{-- 这是第二层 --}}
    <div class="card">

      {{-- 第二层的头部，负责页面标题 --}}
      <div class="card-header">
        <h5>登录</h5>
      </div>

      {{-- 第二层的身体部分，负责放表单和注册链接 --}}
      <div class="card-body">

        {{-- 引入错误提醒视图 --}}
        @include('shared._errors')

        {{-- 第三层 表单部分 --}}
        <form method="POST" action="{{ route('login') }}">

          {{-- 防止页面过期 --}}
          {{ csrf_field() }}

          {{-- 第四层 邮箱列 --}}
          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          {{-- 第四层 密码列 --}}
          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          {{-- 第四层 登录按钮 --}}
          <button>登录</button>
        </form>

        {{-- 第三层，注册链接 --}}
        <hr>

        <p>还没账号？<a href="{{ route('signup') }}">现在注册!</a></p>
      </div>
    </div>
  </div>
  @stop













