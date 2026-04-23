<nav class="navbar navbar-expand-lg navbar-dark shadow-sm cart-navbar profile-navbar">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img class="navbar-logo" src="{{ asset('images/icons/anvil.png') }}" alt="Icon">
            <span class="navbar-title">Blackriver Blades</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#profileNavbar"
            aria-controls="profileNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="profileNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('client.profile') }}">
                        Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('profile.edit-info') }}">
                        Modifier les informations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('profile.edit-password') }}">
                        Modifier le mot de passe
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('order.history') }}">
                        Mes commandes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Accueil
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
