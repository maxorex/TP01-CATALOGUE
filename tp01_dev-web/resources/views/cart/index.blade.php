<x-layout css="cart.css" title="Panier – Blackriver Blades">

    <x-cart.nav />

    <main class="py-5 px-3 cart">
        <div class="container">
            <h1 class="mb-2 fw-bold">Votre panier</h1>
            <br>
            <div class="row g-4">
                @if (session('success'))
                    <div class="alert alert-secondary ">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="col-lg-8">
                    <form action="{{ route('cart.modify') }}" method="POST">
                        @csrf

                        <div class="cart-panel p-4 p-lg-4">
                            @forelse ($items as $item)
                                <div class="d-flex justify-content-between align-items-start pb-3 mb-3 border-bottom"
                                    style="border-color: rgba(255, 140, 0, 0.1);">
                                    <div class="d-flex gap-3 flex-grow-1">

                                        <img src="{{ $item['weapon']->image_url }}"
                                            alt="{{ $item['weapon']->name }}" class="cart-item-image">

                                        <div class="min-w-0">
                                            <h6 class="mb-1 text-white">{{ $item['weapon']->name }}</h6>

                                            <p class="small text-secondary mb-2">{{ $item['weapon']->description }}</p>
                                            <p class="text-gradient-orange mb-0">
                                                {{ number_format($item['weapon']->price, 2, ',', ' ') }} $ / Unité</p>
                                        </div>
                                    </div>

                                    <div class="text-end ms-3">
                                        <div class="d-flex gap-2 justify-content-end mb-2">

                                            @error('quantities')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                            <button type="button" class="btn btn-sm btn-outline-accent"
                                                data-action="decrease" style="width: 36px;">-</button>

                                            <input type="number" min="0" max="{{ $item['weapon']->stock }}"
                                                name="quantities[{{ $item['weapon']->id }}]"
                                                class="form-control form-control-sm text-center quantity-input"
                                                value="{{ $item['amount'] }}" style="width: 50px;">

                                            <button type="button" class="btn btn-sm btn-outline-accent"
                                                data-action="increase" style="width: 36px;">+</button>
                                        </div>

                                        <p class="text-gradient-orange">Total:
                                            {{ number_format($item['totalWeapon'], 2, ',', ' ') }} $</p>

                                        <a href="{{ route('cart.delete', $item['weapon']->id) }}"
                                            class="btn btn-sm btn-outline-light" title="Delete">✕</a>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-5 text-secondary">
                                    <h5>Votre panier est vide.</h5>
                                </div>
                            @endforelse

                            <div class="d-flex gap-2">
                                <button type="submit" name="action" value="update"
                                    class="btn btn-outline-primary flex-grow-1">Mettre à jour</button>
                                <button type="submit" name="action" value="empty"
                                    class="btn btn-outline-danger flex-grow-1">Vider le panier</button>
                            </div>
                        </div>

                    </form>
                </div>


                <!-- Résumé de la commande -->
                <div class="col-lg-4">
                    <div class="cart-panel p-4 p-lg-4 text-secondary">
                        <h5 class="mb-4">Résumé de la commande</h5>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>Sous-total</span>
                            <span class="text-gradient-orange">{{ number_format( $subTotal, 2, ',', ' ') }}
                                $</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>Livraison</span>
                            <span class="text-gradient-orange">0,00 $</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>TPS (5%)</span>
                            <span class="text-gradient-orange">{{ number_format( $totalTPS, 2, ',', ' ') }} $</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3 text-secondary">
                            <span>TVQ (9.975%)</span>
                            <span class="text-gradient-orange">{{ number_format( $totalTVQ, 2, ',', ' ') }} $</span>
                        </div>

                        <div class="d-flex justify-content-between border-top border-secondary pt-3 mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="text-gradient-orange fw-bold fs-5">{{ number_format( $total, 2, ',', ' ') }} $</span>
                        </div>

                        <div class="d-grid gap-2 mb-2">
                            <a href="{{ route('order.checkout') }}" class="btn btn-accent">Passer à la caisse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

</x-layout>
