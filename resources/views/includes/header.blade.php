<header class="bg-light">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="{{asset('images/dc-logo.png')}}" alt="logo dc"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-2 my-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' :' '}}" aria-current="page" href="{{route('home')}}">Characters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('comics') ? 'active' :' '}}" href="{{route('comics.index')}}">Comics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('movies') ? 'active' :' '}}" href="#">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tv') ? 'active' :' '}}" href="#">Tv</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('games') ? 'active' :' '}}" href="#">Games</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('collections') ? 'active' :' '}}" href="#">Collection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('videos') ? 'active' :' '}}" href="#">videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('fans') ? 'active' :' '}}" href="#">Fans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('news') ? 'active' :' '}}" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('shop') ? 'active' :' '}}" href="#">Shop</a>
          </li>     
      </div>
    </div>
  </nav>
</header>
