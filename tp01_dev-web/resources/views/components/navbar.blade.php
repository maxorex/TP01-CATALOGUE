<nav class="navbar">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item">
                <form class="header-form" method="GET" action="{{ route('home') }}">
                    <input type="text" placeholder="Rechercher ..." name="reseach" />
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
