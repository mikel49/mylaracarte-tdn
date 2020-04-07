<nav class="navbar navbar-expand-sm navbar-fixed-top navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="app-navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#artisan">Artisan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
            <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
            <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
            <a class="dropdown-item" href="https://laracasts.com">Laracasts</a>
            <a class="dropdown-item" href="https://larajobs.com">Larajobs</a>
            <a class="dropdown-item" href="https://laravel-news.com">Laravel.News</a>
            <a class="dropdown-item" href="https://larachat.com">Larachat</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact.create') }}">Contact  </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @guest
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('register') }}">Register</a>
            </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
        @endguest
    </ul> 
    
  </div>
  </div>
</nav>