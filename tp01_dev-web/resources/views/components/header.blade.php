<header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <img class="header-logo" src="{{ asset('images/icons/anvil.png') }}" alt="Icon">
            <h1 class="header-title">Blackriver Blades</h1>
        </div>
        <form class="d-flex bg-dark rounded-2 flex-grow-1 mx-3" method="GET" action="{{ route('home') }}">
            <input class="form-control me-2 " type="text" placeholder="Rechercher..." name="search"
                value="{{ request()->search }}">
            <button class="btn reseach-button" type="submit">
                Rechercher
            </button>
        </form>

        @auth('client')
            <li class="nav-item ms-lg-2">
                {{ Auth::guard('client')->user()->name }}
            </li>
            <li class="nav-item ms-lg-1">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-accent position-relative">
                        Déconnexion
                    </button>
                </form>
            </li>
        @endauth

        @guest('client')
            <li class="nav-item ms-lg-1">
                <a class="btn btn-outline-accent position-relative" href="{{ route('loginForm') }}">
                    Connexion
                </a>
            </li>
            <li class="nav-item ms-lg-1">
                <a class="btn btn-outline-accent position-relative" href="{{ route('registerForm') }}">
                    Inscription
                </a>
            </li>
        @endguest

        <div class="col-4">
            <a href="{{ route('cart') }}" class="btn btn-outline-light d-inline-flex align-items-center gap-2"
                title="Panier">
                <span>Panier</span>
                <span class="cart-icon">🛒</span>
            </a>
        </div>
    </div>
</header>
