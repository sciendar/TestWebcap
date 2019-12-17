<ul class="navbar-nav mr-auto">
</ul>

<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link @if(Route::currentRouteNamed('index')) text-primary @endif" href="{{ route('index') }}"><i class="fas fa-home"></i><span> Главная странца</span></a></li>
</ul>

<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link @if(Route::currentRouteNamed('contacts')) text-primary @endif" href="{{ route('contacts') }}"><i class="far fa-envelope-open"></i><span> Контакты</span></a></li>
</ul>

@auth
    @if(Auth::user()->role == 2)
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link @if(Route::currentRouteNamed('admin.index')) text-primary @endif" href="{{ route('admin.index') }}"><i class="fas fa-users"></i><span> Пользователи</span></a></li>
        </ul>
    @endif
@endauth
