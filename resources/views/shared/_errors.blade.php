{{-- 错误消息局部图 --}}
@if (count($errors) > 0)
{{-- (alert 警惕的; error 错误) --}}
  <div class="alert alert-danger">
    <u1>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </u1>
  </div>
@endif




















