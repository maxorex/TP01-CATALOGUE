<x-layout title="Acceuil">

    <x-header />
    <x-navbar />

    <div class="app-content">
        <section class="container">
            <h3>Catégories</h3>
            <div>
                <form method="GET" class="row row-cols-auto g-2" action="{{ route('home') }}">
                    @foreach ($categories as $category)
                        <div class="col">
                            <input type="checkbox" class="btn-check" id="categorie{{ $category->id }}" name="categories[]"
                                value="{{ $category->id }}" autocomplete="off" @checked($filtres->contains($category->id))>

                            <label for="categorie{{ $category->id }}"
                                class="category-card d-flex flex-column 
                                align-items-center justify-content-center 
                                text-center rounded-3">

                                <img src="{{ asset("images/icons/$category->iconPath") }}" alt="{{ $category->name }}"
                                    class="mb-1" width="32">

                                <span class="small fw-semibold">
                                    {{ $category->name }}
                                </span>
                            </label>
                        </div>
                    @endforeach

                    <div>
                        <button type="submit"
                            class="button-success d-flex flex-column 
                            align-items-center justify-content-center 
                            text-center rounded-3 btn btn-success">Filtrer</button>
                    </div>

                    <div>
                        <a href="{{ route('home') }}"
                            class="button-success d-flex flex-column 
                            align-items-center justify-content-center 
                            text-center rounded-3 btn btn-primary">Réinitialiser</a>
                    </div>
                </form>
            </div>

            <div>
                <h2 class="page-title">Nos produits</h2>
                <div class="row g-3 g-lg-4">
                    @forelse ($weapons as $weapon)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <a href="{{ route('weapons.show', $weapon->id) }}" class="btn-details text-decoration-none"
                                data-bs-toggle="modal" data-bs-target="#weaponModal">
                                <div class="product-card" style="cursor: pointer;">
                                    @if ($weapon->imagePath)
                                        <img src="{{ asset("images/$weapon->imagePath") }}" alt="{{ $weapon->name }}">
                                    @else
                                        <img src="{{ asset('images/image-not-available.jpg') }}"
                                            alt="image non disponible">
                                    @endif

                                    <h3 class="product-name">{{ $weapon->name }}</h3>
                                    <p class="product-description">{{ $weapon->description }}</p>
                                    <p class="product-price">${{ $weapon->price }} $</p>
                                    <button class="btn ">Ajouter au panier</button>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p>Aucun produit disponible pour le moment.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="weaponModal" tabindex="-1" aria-labelledby
        ="weaponModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <!-- Le contenu de la modale sera chargé dynamiquement via JavaScript -->
            </div>
        </div>

    </div>


    <script src="{{ asset('js/index.js') }}"></script>

    <x-footer />

</x-layout>
