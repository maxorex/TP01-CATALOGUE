<x-layout css="panier.css" title="Cart – Blackriver Blades">

    <x-cart.nav />

    <main class="py-5 px-3 cart">
        <div class="container">
            <h1 class="mb-2">Your Cart</h1>
            <p class="text-secondary mb-5">Review quantities before proceeding to checkout.</p>

            <div class="row g-4">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <div class="cart-panel p-4 p-lg-4">
                        @forelse ($items as $item)
                            <div class="d-flex justify-content-between align-items-start pb-3 mb-3 border-bottom" style="border-color: rgba(255, 140, 0, 0.1);">
                                <div class="d-flex gap-3 flex-grow-1">
                                    @if ($item->weapon->imagePath)
                                        <img src="{{ asset("images/$item->weapon->imagePath") }}" alt="{{ $item->weapon->name }}" class="rounded cart-item-thumb">
                                    @else
                                        <img src="{{ asset('images/image-not-available.png') }}" alt="image not available" class="rounded cart-item-thumb">
                                    @endif
                                    
                                    <div class="min-w-0">
                                        <h6 class="mb-1">{{ $item->weapon->name }}</h6>
                                        <p class="small text-secondary mb-2">{{ $item->weapon->description }}</p>
                                        <p class="text-gradient-orange mb-0">{{ number_format((float)$item->weapon->price, 2) }} $ / unit</p>
                                    </div>
                                </div>

                                <div class="text-end ms-3">
                                    <div class="d-flex gap-2 justify-content-end mb-2">
                                        <button type="button" class="btn btn-sm btn-outline-accent" data-action="decrease" style="width: 36px;">-</button>
                                        <input type="number" class="form-control form-control-sm text-center" value="{{ $item->quantity }}" min="1" readonly style="width: 50px;">
                                        <button type="button" class="btn btn-sm btn-outline-accent" data-action="increase" style="width: 36px;">+</button>
                                    </div>
                                    <p class="text-gradient-orange fw-bold mb-2">{{ number_format((float)$item->weapon->price * (float)$item->quantity, 2) }} $</p>
                                    <button type="button" class="btn btn-sm btn-link text-danger" title="Remove">✕</button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <h5>Your cart is empty</h5>
                                <p class="text-secondary mb-3">Start shopping by browsing our selection of products.</p>
                                <a href="{{ route('home') }}" class="btn btn-accent">Continue Shopping</a>
                            </div>
                        @endforelse

                        @if (count($items) > 0)
                            <div class="pt-3 border-top">
                                <form method="POST" action="{{ route('cart.applyPromo') }}" class="d-flex flex-column flex-md-row gap-2">
                                    @csrf
                                    <input type="text" class="form-control" placeholder="Promo code (ex: DEV10)" name="promo_code" style="max-width: 260px;">
                                    <button type="submit" class="btn btn-outline-accent">Apply</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="cart-panel p-4 p-lg-4">
                        <h5 class="mb-4">Order Summary</h5>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>Subtotal</span>
                            <span class="text-gradient-orange">{{ isset($sousTotal) ? number_format((float)$sousTotal, 2) : '0.00' }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 text-secondary">
                            <span>Shipping</span>
                            <span class="text-gradient-orange">0.00</span>
                        </div>

                        @if (isset($totalTPS))
                            <div class="d-flex justify-content-between mb-2 text-secondary">
                                <span>GST (5%)</span>
                                <span class="text-gradient-orange">{{ number_format((float)$totalTPS, 2) }}</span>
                            </div>
                        @endif

                        @if (isset($totalTVQ))
                            <div class="d-flex justify-content-between mb-3 text-secondary">
                                <span>QST (9.975%)</span>
                                <span class="text-gradient-orange">{{ number_format((float)$totalTVQ, 2) }}</span>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between border-top border-secondary pt-3 mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="text-gradient-orange fw-bold fs-5">{{ isset($total) ? number_format((float)$total, 2) : '0.00' }}</span>
                        </div>

                        @if (count($items) > 0)
                            <div class="d-grid gap-2 mb-2">
                                <button class="btn btn-accent">Proceed to Checkout</button>
                                <button type="submit" form="update-cart-form" class="btn btn-outline-accent">Update Cart</button>
                            </div>
                        @endif

                        <a href="{{ route('home') }}" class="btn btn-outline-accent w-100">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

</x-layout>
