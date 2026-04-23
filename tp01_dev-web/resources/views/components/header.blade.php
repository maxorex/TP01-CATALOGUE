<header class="header">
    <div class="container d-flex align-items-center gap-3">
        <div class="d-flex align-items-center gap-2">
            <img class="header-logo" src="{{ asset('images/icons/anvil.png') }}" alt="Icon">
            <h1 class="header-title">Blackriver Blades</h1>
        </div>
        <form class="d-flex bg-research rounded-2 flex-grow-1 mx-3" method="GET" action="{{ route('home') }}">
            <input class="form-control me-2" type="text" placeholder="Rechercher..." name="search"
                value="{{ request()->search }}">
            <button class="btn research-button" type="submit">
                Rechercher
            </button>
        </form>

        <div class="d-flex align-items-center gap-2 flex-shrink-0 ms-auto">
            @auth('client')
                <a href="{{ route('client.profile') }}"
                    class="btn btn-outline-light d-inline-flex align-items-center gap-2 text-nowrap">
                    {{ Auth::guard('client')->user()->name }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light d-inline-flex align-items-center gap-2 text-nowrap">
                        Déconnexion
                    </button>
                </form>
            @endauth

            @guest('client')
                <a class="btn btn-outline-light d-inline-flex align-items-center gap-2 text-nowrap"
                    href="{{ route('loginForm') }}">
                    Connexion
                </a>
                <a class="btn btn-outline-light d-inline-flex align-items-center gap-2 text-nowrap"
                    href="{{ route('registerForm') }}">
                    Inscription
                </a>
            @endguest

            <a href="{{ route('cart') }}"
                class="btn btn-outline-light d-inline-flex align-items-center gap-2 text-nowrap" title="Panier">
                <span>Panier <span>🛒</span></span>
            </a>
        </div>
    </div>
</header>
