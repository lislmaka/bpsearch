<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="h2 font-weight-bold text-muted">
                {{ config('app.name', 'BPSearch') }}
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">


                @if( Route::current()->getName() == 'projects' )
                    <li class="nav-item">
                        <a class="nav-link lead font-weight-bold active" href="#">Проекты</a>
                    </li>
                @else
                    <li class="nav-item lead font-weight-normal">
                        <a class="nav-link" href="#">Проекты</a>
                    </li>
                @endif

                @if( Route::current()->getName() == 'people' )
                    <li class="nav-item">
                        <a class="nav-link lead font-weight-bold active" href="#">Люди</a>
                    </li>
                @else
                    <li class="nav-item lead font-weight-normal">
                        <a class="nav-link" href="#">Люди</a>
                    </li>
                @endif

                @if( Route::current()->getName() == 'activities' )
                    <li class="nav-item">
                        <a class="nav-link lead font-weight-bold active" href="#">Активности</a>
                    </li>
                @else
                    <li class="nav-item lead font-weight-normal">
                        <a class="nav-link" href="#">
                            Активности
                        </a>
                    </li>
                @endif
            </ul>

            @guest
                <div class="btn-group" role="group">
                    <a class="btn btn-primary" href="{{ route('login') }}" role="button">
                        Вход
                    </a>
                    @if(Route::has('register'))
                        <a class="btn btn-secondary" href="{{ route('register') }}" role="button">
                            Регистрация
                        </a>
                    @endif
                </div>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
</nav>
