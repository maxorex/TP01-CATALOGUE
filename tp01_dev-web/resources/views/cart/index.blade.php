<x-layout css="panier.css" title="Panier – DevGear">

    <x-panier.nav />

    <main class="py-lg-5 container py-4">
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end mb-4 gap-3">
            <div>
                <h1 class="display-6 fw-bold mb-1">Votre panier</h1>
                <p class="muted mb-0">Vérifie les quantités, puis passe à la caisse.</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Items -->
            <div class="col-lg-8">
                <div class="glass rounded-4 p-lg-4 p-3">
                    <div class="table-responsive">
                        <table class="mb-0 table align-middle">
                            <thead>
                                <tr class="muted small">
                                    <th>Produit</th>
                                    <th style="width:140px;">Prix</th>
                                    <th style="width:180px;">Quantité</th>
                                    <th style="width:140px;">Total</th>
                                    <th style="width:60px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Ligne 1 -->
                                @forelse ($items as $item)
                                    <tr>
                                        <div class="d-flex align-items-center gap-3">
                                            <img class="thumb" src="" alt="">
                                            <div>
                                                <div class="fw-semibold">{{ $item->produit->nom }}</h6>
                                                    <p class="muted small mb-3">
                                                        {{ $item->produit->description }}
                                                    </p>
                                                    <div class="price fw-semibold fs-4 mb-3">{{ $item->produit->prix }}
                                                        $</div>
                                                </div>
                                                <td class="price">{{ $item->totalProduit }}</td>
                                            </div>
                                    </tr>
                                @empty
                                    <!-- Message panier vide (à afficher conditionnellement) -->
                                    <tr>
                                        <td colspan="5" class="muted py-4 text-center">
                                            Votre panier est vide.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <hr class="my-4" style="border-color: rgba(255,255,255,.12);">

                    <div class="d-flex flex-column flex-md-row justify-content-between gap-2">
                        <div class="d-flex gap-2">
                            <input class="form-control" placeholder="Code promo (ex: DEV10)" style="max-width: 260px;">
                            <button class="btn btn-outline-accent">Appliquer</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sommaire -->
            <div class="col-lg-4">
                <div class="glass rounded-4 p-lg-4 p-3">
                    <h2 class="h5 fw-semibold mb-3">Commande</h2>

                    <div class="d-flex justify-content-between muted">
                        <span>Sous-total</span>
                        <span class="price" id="subtotal">{{ $sousTotal }}</span>
                    </div>
                    <div class="d-flex justify-content-between muted mt-2">
                        <span>Livraison</span>
                        <span class="price">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between muted mt-2">
                        <span>Taxes (TPS+TVQ)</span>

                        <span class="price" id="tax">{{ $totalTPS }}</span>
                        <span class="price" id="tax">{{ $totalTVQ }}</span>
                    </div>

                    <hr class="my-3" style="border-color: rgba(255,255,255,.12);">

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-semibold">Total</span>
                        <span class="price fs-4 fw-bold" id="total">{{ $total }}</span>
                    </div>

                    <div class="d-grid mt-4 gap-2">
                        <button class="btn btn-accent btn-lg">Passer à la caisse</button>
                        <button class="btn btn-outline-accent">Mettre à jour le panier</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-layout>
