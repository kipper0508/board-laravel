<nav class="navbar-fixed-top navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="{{route('index')}}">留言板</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      @if(Session::has('user') || Session::has('admin'))
      <li class="nav-item">
        <a class="nav-link" href="{{route('comment')}}">留言</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('replyindex')}}">回覆</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('self')}}">個人資料</a>
      </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登入</a>
        </li>
      @endif
    </ul>
    @if(Session::has('user') || Session::has('admin'))
          
    <p class="text-warning" style="position:absolute;  top:15px; right:100px;">Hello, {{ $name }}</p>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-secondary my-2 my-sm-0" href="{{route('logout')}}">登出</a>
    </form>
    @endif
  </div>
  </div>
</nav>
