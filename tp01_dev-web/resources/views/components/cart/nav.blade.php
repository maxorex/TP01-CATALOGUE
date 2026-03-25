<nav class="navbar navbar-expand-lg navbar-dark shadow-sm cart-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img class="navbar-logo" src="{{ asset('images/icons/anvil.png') }}" alt="Icon">
            <span class="navbar-title">Blackriver Blades</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Continue Shopping</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
