<x-layout title="DevGear - Admin detail commande">

    <main class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Commande #{{ $order->id }}</h4>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="small text-muted">Client</div>
                            {{ $order->client->first_name }} {{ $order->client->name }}
                        </div>
                        <div class="col-4">
                            <div class="small text-muted">Date</div>
                            {{ $order->created_at }}
                        </div>
                    </div>

                    <form method="POST" class="mt-3" action="{{ route('admin.order-edit', $order->id) }}">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <label for="state" class="form-label">Etat de livraison</label>
                                <select id="state" name="state" class="form-select">
                                    <option value=" {{ old('state', $order->state) }} ">
                                        {{ old('state', $order->state) }}
                                    </option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}">
                                            {{ $state }}
                                        </option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btn btn-primary"> Enregistrer </button>
                            </div>
                        </div>
                    </form>

                    <h5 class="mt-3">Articles de la commande</h5>
                    <div>
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th style="color: white">Produit</th>
                                    <th style="color: white">Prix unitaire</th>
                                    <th style="color: white">Quantite</th>
                                    <th style="color: white">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($order->purchases as $purchase)
                                    <tr class="text-white">
                                        <td class="text-white">{{ $purchase->product_name }}</td>
                                        <td class="text-white">
                                            ${{ number_format($purchase->unit_price / 100, 2, ',', ' ') }}</td>
                                        <td class="text-white">{{ $purchase->quantity }}</td>
                                        <td class="text-white">
                                            ${{ number_format($purchase->total / 100, 2, ',', ' ') }}</td>
                                    </tr>
                                @empty
                                    <tr class="text-white">
                                        <td class="text-white">
                                            Aucun article trouver pour cette commande.
                                        </td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>TPS (5%)</span>
                                <span
                                    class="price muted">${{ number_format($orderAmounts['tps'] / 100, 2, ',', ' ') }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>TVQ (9.975%)</span>
                                <span
                                    class="price muted">${{ number_format($orderAmounts['tvq'] / 100, 2, ',', ' ') }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Total</span>
                                <span>${{ number_format($order->total_amount / 100, 2, ',', ' ') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('admin.order') }}" class="btn btn-light">retour</a>
                </div>
            </div>
        </div>
    </main>

</x-layout>
