<div class="modal-header">
    <h1 class="modal-title fs-4 weapon-modal-title" id="exampleModalLabel">{{ $weapon->name }}</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
    <div class="row g-4 align-items-start weapon-modal-layout">
        <div class="col-12 col-md-5">
            <div class="weapon-modal-image-wrap">
                @if ($weapon->imagePath)
                    <img src="{{ asset("images/$weapon->imagePath") }}" alt="{{ $weapon->name }}"
                        class="weapon-modal-image">
                @else
                    <img src="{{ asset('images/image-not-available.png') }}" alt="image non disponible"
                        class="weapon-modal-image">
                @endif
            </div>
        </div>

        <div class="col-12 col-md-7">

            <p class="category-name weapon-modal-category mb-3 d-inline-block">
                {{ $weapon->category->name }}
            </p>

            <p class="weapon-modal-description mb-3">
                {{ $weapon->description }}
            </p>

            <p class="weapon-modal-stock mb-3">
                Stock disponible: <span>{{ $weapon->amount }}</span>
            </p>

            <div class="modal-weapon-price fw-semibold">{{ $weapon->price }} $</div>
        </div>
    </div>
</div>
<div class="modal-footer weapon-modal-footer">
    <button type="button" class="btn btn-outline-accent button-style" data-bs-dismiss="modal">Continuer</button>
    <button type="button" class="btn btn-outline-accent button-style weapon-modal-add-btn">Ajouter au panier</button>
</div>
