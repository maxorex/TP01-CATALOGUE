<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">

        <div class="collapse navbar-collapse">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-3">
                <li class="nav-item" style="cursor: pointer;">
                    <a class="nav-link" href="{{ route('home') }}">Acceuil</a>
                </li>

                <li class="nav-item" style="cursor: pointer;">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 reseach-button" type="search" placeholder="Rechercher..." aria-label="Search">
                        <button class="btn" type="submit">
                            Rechercher
                        </button>
                    </form>
                </li>
            </ul>   
        </div>
    </div>
</nav>
