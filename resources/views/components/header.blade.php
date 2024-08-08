<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-start position-relative">
            <div class="container-logo me-5">
                TrimURL
            </div>
            <ul class="p-0 m-0 ms-3">
                <li class="list-unstyled d-inline me-3"><a class="text-decoration-none" href="{{route('home')}}">Home</a></li>
                <li class="list-unstyled d-inline"><a class="text-decoration-none" href="">Historial</a></li>
            </ul>
            @auth
                <div class="text-end position-absolute end-0">
                    <p class="d-inline">{{Auth::user()->name}}</p>
                    <a class="btn btn-warning" href="{{ route('logout') }}">Cerrar sesión</a>
                </div>
            @else
                <div class="text-end position-absolute end-0">
                    <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-warning" href="{{ route('register') }}">Sign-up</a>
                </div>
            @endauth
        </div>
    </div>
</header>
