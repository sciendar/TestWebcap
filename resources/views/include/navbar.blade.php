<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar indigo">
    <div class="container-fluid smooth-scroll">
        <a class="navbar-brand" href="/">TestWebcap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">

            @include('include._sidebar')

            <div class="navbar-nav ml-auto">
                <!-- Вход/выход -->
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownAuth" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/img/not-user.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">&#8194;{{ Auth::user()->email }} <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAuth">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item avatar dropdown">
                            <a href="{{ route('login') }}">
                                <div class="spinner-grow text-primary fast" role="status"
                                     style="position: absolute; width: 2rem; height: 2rem;">
                                    <i class="fas fa-power-off fa-2x" style="color: lime"></i></div>
                                <i class="fas fa-power-off fa-2x" style="color: lime"></i>
                            </a>
                        </li>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>
<br><br>
