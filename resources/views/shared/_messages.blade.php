{{-- 消息提醒视图 --}}
{{-- (danger 危险; warning 警告; info 信息，统计; message 消息，留言板; flash 闪存; alert 警惕的; ) --}}
@foreach (['danger','warning','success','info'] as $msg)
  @if(session()->has($msg))
    <div class="flash-message">
      <P class="alert alert-{{ $msg }}">

        {{-- 用于判断会话中 $msg 键对应的值是否为空，若为空则在页面上不进行显示 --}}
        {{ session()->get($msg) }}

      </P>
    </div>
    @endif
@endforeach
















