<nav class="navbar navbar-expand-sm bg-light">
  <a class="navbar-brand" href="admin"><img src="{{asset('admin/img/A-0.png')}}" alt=""></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('index')}}">หน้าเเรก</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.f')}}">สินค้าเเละบริการ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('work')}}">ผลงานของเรา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">ติดต่อ</a>
      </li>
    </ul>

    <form class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
          <div class="top-right links">
            @auth
            <a class="nav-link" href="{{ url('/home') }}">Home</a>
            @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            @endauth
          </div>
          @endif
        </div>
      </ul>
    </form>
  </div>
</nav>