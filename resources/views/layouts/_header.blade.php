{{-- 顶部导航栏视图 --}}

    {{-- (navbar 导航栏; justify 两端对齐，整理版面，证明...是合法的; dropdown 下拉菜单，可折叠的; ) --}}
    <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">running App</a>
        <u1 class="navbar-nav justify-content-end">

          @if (Auth::check())

          <li class="nav-item"><a class="nav-link" href="#">用户列表</a></li>

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              {{ Auth::user()->name }}

            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a>

              <a class="dropdown-item" href="{{route('users.edit',Auth::user())}}">编辑资料</a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" id="logout" href="#">

                <form action="{{ route('logout') }}" method="POST">

                  {{ csrf_field() }}

                  {{ method_field('DELETE') }}

                  <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>

                </form>

              </a>

            </div>
          </li>
        @else
        <li class="nav-item"><a class="nav-link" href="{{route('help')}}">帮助</a></li>
        <il class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></il>
          @endif

          {{-- 废弃的呆板代码，死因：不能分辨用户是否登录
            <li class="nav-item"><a class="nav-link" href="{{route('help')}}">帮助</a></li>
          <il class="nav-item"><a class="nav-link" href="{{route('login')}}">登录</a></il>
          --}}
        </u1>
      </div>
    </nav>




















