<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Memorize</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/')  ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about')   ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('post') ? 'active' : '' }}" href="/post">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}" href="/categories">Kategori</a>
          </li>
        </ul>
        <ul class="nav navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    Hello, {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/admin"><i class="bi bi-person"></i>My acount</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                      </form>
                    </li>
                </ul>
              </li>
            @else

            <li class="nav-item">
                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
            @endauth
        </ul>
      </div>
    </div>
  </nav>
