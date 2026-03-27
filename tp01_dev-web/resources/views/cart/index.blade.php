<x-layout css="cart.css" title="Panier – Blackriver Blades">

    <x-cart.nav />

    <main class="py-5 px-3 cart">
        <div class="container">
            <h1 class="mb-2">Votre panier</h1>
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

                                        @if ($item['weapon']->imagePath)
                                            <img src="images/{{ $item['weapon']->imagePath }}"
                                                alt="{{ $item['weapon']->imagePath }}" class="cart-item-image">
                                        @else
                                            <img src="{{ asset('images/image-not-available.png') }}"
                                                alt="image non disponible" class="cart-item-image">
                                        @endif

                                        <div class="min-w-0">
                                            <h6 class="mb-1 text-white">{{ $item['weapon']->name }}</h6>

                                            <p class="small text-secondary mb-2">{{ $item['weapon']->description }}</p>
                                            <p class="text-gradient-orange mb-0">
                                                {{ $item['weapon']->price }} $ / Unité</p>
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
                                                value="{{ $item['quantity'] }}" style="width: 50px;">

                                            <button type="button" class="btn btn-sm btn-outline-accent"
                                                data-action="increase" style="width: 36px;">+</button>
                                        </div>

                                        <p class="text-gradient-orange">Total: {{ $item['totalProduct'] }} $</p>

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
                            <span class="text-gradient-orange">{{ $subtotal }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>Livraison</span>
                            <span class="text-gradient-orange">0,00</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>TPS (5%)</span>
                            <span class="text-gradient-orange">{{ $totalTPS }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3 text-secondary">
                            <span>TVQ (9.975%)</span>
                            <span class="text-gradient-orange">{{ $totalTVQ }}</span>
                        </div>

                        <div class="d-flex justify-content-between border-top border-secondary pt-3 mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="text-gradient-orange fw-bold fs-5">{{ $total }}</span>
                        </div>

                        <div class="d-grid gap-2 mb-2">
                            <button class="btn btn-accent">Passer à la caisse</button>
                        </div>

                        <a href="{{ route('home') }}" class="btn btn-outline-accent w-100">Continuer vos achats</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

</x-layout>
