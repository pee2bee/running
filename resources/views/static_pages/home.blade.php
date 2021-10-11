{{-- 使用@extends 并通过传参来继承父视图 layouts/default.blade.php 的视图模板。(extend 继承，扩展) --}}
@extends('layouts.default')
@section('title','主页')

@section('content')
  {{-- jumbotron 超大屏幕 --}}
  <div class="jumbotron">
    <h1>Hello Laravel,this's my second time!</h1>
    {{-- lead 领导 ;essential 必不可少的 training 培养，训练--}}
    <p class="lead">
      你现在所看到的是<a href="https://learnku.com/courses/laravel-essential-training">第二遍的Laravel 入门教程</a>的running项目主页。
    </p>
    <p>
      一切，又将重新开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="#" role="button">现在注册！</a>
    </p>
  </div>
@stop


























