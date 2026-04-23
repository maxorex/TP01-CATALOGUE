<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <div class="collapse navbar-collapse align-items-center">
            <ul class="navbar-nav me-auto mb-0 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                </li>

                @auth('client')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client.profile') }}">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.history') }}">Mes commandes</a>
                </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
