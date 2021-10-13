{{-- 用户编辑视图，主要用来更新密码和头像 --}}
{{-- ( extend 继承; layout 布局; default 默认，违约; section 部分，章节; target 目标; blank 空白的; method 方法; patch 补丁，修补; label 标签，标签控件; dissabled 禁用，丧失功能; confirmation 确认，证书; ) --}}

{{-- 引入默认布局 --}}
@extends('layouts.default')

{{-- 改网址标题 --}}
@section('title','更新个人资料')

{{-- 填充内容 --}}
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>更新个人资料</h5>
    </div>

    <div class="card-body">

      @include('shared._errors')

      <div class="gravtar_edit">
        <a href="http://gravatar.com/emails" target="_blank">
        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
        </a>
      </div>

      <form method="POST" action="{{ route('users.update',$user->id) }}">

        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">名称：</label>
          <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group">
          <label for="email">邮箱：</label>
          <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
        </div>

        <div class="form-group">
          <label for="password">密码：</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="form-group">
          <label for="password_confirmation">确认密码：</label>
          <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
      </form>
    </div>
  </div>
</div>
@stop

















