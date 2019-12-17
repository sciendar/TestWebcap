<footer class="page-footer font-small indigo fixed-bottom">
    @auth
        @if(Auth::user()->role != 8)
            @php
                $time_end = microtime(true);
                $time = $time_end - LARAVEL_START;
                echo "Выполнено за $time секунд";
            @endphp
        @endif
    @endauth
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019
        <a href="http://sciendar.com"> TestWebcap</a>
    </div>
    <!-- Copyright -->
</footer>
