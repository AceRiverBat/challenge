<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ url('/') }}">
                <h1>Challenge</h1>
            </a>
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        @if (Route::has('login'))
                        @auth
                        <a class="nav-link active" href="{{ route('logout') }}">Se déconnecter</a>
                        @else
                        <a class="nav-link active" href="{{ route('login') }}">Se connecter</a>
                        @endauth
                        @endif
                        @if (Auth::user() && Auth::user()->role == 1)
                        <a class="nav-link active" href="{{ route('admin') }}">Admin</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <hr>
    </div>