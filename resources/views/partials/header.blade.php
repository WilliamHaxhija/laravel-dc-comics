<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                            <a  href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">
                            <a href="{{ route('comics.index') }}">COMICS</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'comics.create' ? 'active' : '' }}">
                            <a href="{{ route('comics.create') }}">CREATE</a>
                        </li>
                        <li class="nav-item">
                            <a href="">TV</a>
                        </li>
                        <li class="nav-item">
                            <a href="">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a href="">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a href="">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a href="">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a href="">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a href="">SHOP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
