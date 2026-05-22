<x-layout title="DevGear - Admin commandes">

    <main class="container py-5">

        <div class="d-flex justify-content-between align-items-center">
            <h1>Gestion des commandes</h1>

            <a href="{{ route('home') }}" class="btn btn-outline-light">Retour au menu</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @forelse ($orders as $order)
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">

                        <div class="col-2">
                            <small class="text-muted">Commande</small>
                            <span>#{{ $order->id }}</span>
                        </div>

                        <div class="col-3">
                            <small class="text-muted">Client</small>
                            <span>
                                {{ $order->client->first_name }}
                                {{ $order->client->name }}
                            </span>
                        </div>

                        <div class="col-3">
                            <small class="text-muted">Date</small>
                            <span>{{ $order->created_at }}</span>
                        </div>

                        <div class="col-2">
                            <small class="text-muted">Statut</small>

                            <span class="badge bg-primary">
                                {{ $order->state }}
                            </span>
                        </div>

                        <div class="col-2">
                            <a href="{{ route('admin.order-details', $order->id) }}"
                                class="btn btn-outline-primary w-100">
                                Details
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        @empty
            <div class="alert alert-secondary">
                Aucune commande trouvée.
            </div>
        @endforelse
    </main>

</x-layout>
