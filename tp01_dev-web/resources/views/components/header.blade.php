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
        <a href="{{ route('cart') }}" class="btn btn-outline-light d-inline-flex align-items-center gap-2" title="Panier">
            <span>Panier</span>
            <span class="cart-icon">🛒</span>
        </a>
    </div>
</header>
