<x-layout title="DevGear - Mes achats" css="cart.css">

    <x-profile.nav />

    <main class="py-lg-5 container py-4">
        <h1 class="display-6 fw-bold mb-4">Mes achats</h1>

        @forelse ($orders as $order)
            <div class="glass rounded-4 p-lg-4 p-3 mb-4 text-white">

                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                    <div>
                        <span class="fw-semibold">Commande #{{ $order->id }}</span>
                        <span class="small ms-3 muted">{{ $order->created_at->format('d-m-Y') }}</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="small muted">
                            Livraison prévue : {{ $order->created_at->addDays(5)->format('d-m-Y') }}
                        </span>

                        <span
                            class="badge rounded-pill                             
                            @switch($order->status)
                                @case('en_attente')
                                    {{ 'bg-warning' }}
                                    @break
                                @case('envoyee')
                                    {{ 'bg-info' }}
                                    @break
                                @case('en_transit')
                                    {{ 'bg-primary' }}
                                    @break
                                @case('livree')
                                    {{ 'bg-success' }}
                                    @break
                                @default
                                    {{ 'bg-secondary' }}
                            @endswitch">


                            @switch($order->state)
                                @case('en_preparation')
                                    {{ 'En préparation' }}
                                @break

                                @case('envoyee')
                                    {{ 'Envoyée' }}
                                @break

                                @case('en_transit')
                                    {{ 'En transit' }}
                                @break

                                @case('livree')
                                    {{ 'Livrée' }}
                                @break

                                @default
                                    {{ 'N/A' }}
                            @endswitch
                        </span>
                    </div>
                </div>
                <table class="table align-middle mb-3" style="--bs-table-bg: transparent; --bs-table-color: #fff; --bs-table-border-color: rgba(255,255,255,.12);">
                    <thead>
                        <tr class="small text-white">
                            <th>Produit</th>
                            <th style="width:120px;">Prix unitaire</th>
                            <th style="width:80px;">Quantité</th>
                            <th style="width:120px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->purchases as $purchase)
                            <tr>
                                <td class="text-white">{{ $purchase->product_name }}</td>
                                <td class="price text-white">${{ number_format($purchase->unit_price / 100, 2, ',', ' ') }}</td>
                                <td class="text-white">{{ $purchase->quantity }}</td>
                                <td class="price fw-semibold text-white">${{ number_format($purchase->total / 100, 2, ',', ' ') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end">
                    <div style="min-width:220px;">
                        <div class="d-flex justify-content-between small muted">
                            <span>Sous-total</span>
                            <span class="price muted">${{ 0.0 }}</span>
                        </div>
                        <div class="d-flex justify-content-between small muted mt-1">
                            <span>TPS (5%)</span>
                            <span class="price muted">${{ 0.0 }}</span>
                        </div>
                        <div class="d-flex justify-content-between small muted mt-1">
                            <span>TVQ (9.975%)</span>
                            <span class="price muted">${{ 0.0 }}</span>
                        </div>
                        <hr class="my-2" style="border-color: rgba(255,255,255,.12);">
                        <div class="d-flex justify-content-between fw-semibold">
                            <span>Total</span>
                            <span class="price text-white">${{ number_format($order->total_amount / 100, 2, ',', ' ') }}</span>
                        </div>
                    </div>
                </div>

            </div>
            @empty

                <div class="glass rounded-4 p-lg-4 p-3 text-center text-white">
                    Vous n'avez effectué aucun achat pour l'instant.
                </div>
            @endforelse

        </main>

    </x-layout>
