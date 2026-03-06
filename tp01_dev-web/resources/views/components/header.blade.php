<header class="header">
    <div class="container d-flex">
        <div class="col-6 d-flex align-items-center gap-2">
            <img class="header-logo" src="{{ asset('images/icons/anvil.png') }}" alt="Icon">
            <h1 class="header-title">Blackriver Blades</h1>
        </div>
        <div class="col-6" >
            <form class="d-flex bg-dark rounded-2" method="GET" action="{{ route('home') }}">
                <input class="form-control me-2 " type="text" placeholder="Rechercher..." name="search" value="{{ request()->search }}">
                <button class="btn reseach-button" type="submit" >
                    Rechercher
                </button>
            </form>
        </div>
    </div>
</header>
