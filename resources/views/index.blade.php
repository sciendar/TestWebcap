<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Test - Webcap</title>
    @include('include.meta')
    @include('include.links')

</head>
<body class="grey lighten-3">
<header>
    <!-- Navbar -->
@include('include.navbar')
<!-- /Navbar -->
</header>

<section>
    <!-- Content -->
    <br><br>
@include('_errors')
@include('_success')
@yield('content')
<!-- /Content -->
</section>

<a href="#" class="scrollup">Наверх</a>
<br><br><br><br>
<footer>
    <!-- Footer -->
@include('include.footer')
<!-- /Footer -->
</footer>

@include('include.scripts')

</body>
</html>
