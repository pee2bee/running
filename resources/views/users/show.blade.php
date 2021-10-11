@extends('layouts.default')
@section('title',$user->name)

@section('content')
{{-- 加入新创建的用户信息局部视图 --}}
<div class="row">
{{-- (row 行，列) --}}
  <div class="offser-md-2 col-md-8">
  {{-- offset 偏移，偏移量；md = margin-bottom margin 外边距， bottom 底部；col-md 中等屏幕 桌面显示器 (≥992px);
在col-md-*：
col为柱
md为介质设备（平台装置：台式机，992px及以上）
4或6个值是指使用的网格列数。
由于总共有行中的网格列。
col-md-4结果在大小相等的（12/4 = 3）的列。
col-md-6结果在等大小的列（12/6 = 2）。
--}}
    <div class="col-md-12">
    <div class="offset-md-2 col-md-8">
        <section class="user_info">
        {{-- (info 信息;) --}}
          @include('shared._user_info',['user'=>$user])
        </section>
      </div>
    </div>
  </div>
</div>
@stop













