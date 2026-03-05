<div id="weaponModal" class="modal modal-content app-content weapon-detail-page">
    <section class="container py-4 py-lg-5">
        <a href="{{ route('home') }}" class="detail-back-link">Retour aux produits</a>

        <article class="weapon-detail-card">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="weapon-image-wrap">
                        @if ($weapon->imagePath)
                            <img src="{{ asset("images/{$weapon->imagePath}") }}" class="weapon-detail-image"
                                alt="{{ $weapon->name }}">
                        @else
                            <img src="{{ asset('images/cartes/image-non-disponible.jpg') }}" class="weapon-detail-image"
                                alt="Image non disponible">
                        @endif
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <span class="weapon-category-pill">{{ $weapon->category->name }}</span>
                    <h1 class="weapon-detail-title">{{ $weapon->name }}</h1>
                    <p class="weapon-detail-description">{{ $weapon->description }}</p>

                    <div class="weapon-meta-row">
                        <div class="weapon-price-box">
                            <span class="weapon-price-label">Prix</span>
                            <p class="weapon-price-value">${{ $weapon->price }}</p>
                        </div>

                        <div class="weapon-stock-box">
                            <span class="weapon-stock-label">Inventaire</span>
                            <p class="weapon-stock-value">{{ $weapon->amount }} en stock</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>
