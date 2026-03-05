
<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $weapon->name }}</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body modal-content">
    <div class="d-flex gap-3">
        <img class="thumb" src="{{ asset($weapon->imagePath) }}" alt="{{ $weapon->name }}" style="width: 220px;">
        <div>
            <p class="muted small mb-3">
                {{ $weapon->description }}
            </p>
            <div class="price fw-semibold fs-4 mb-3">{{ $weapon->price }} $</div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-accent ms-2" data-bs-dismiss="modal">Continuer</button>
    <button type="button" class="btn btn-accent">Ajouter au panier</button>
</div>
