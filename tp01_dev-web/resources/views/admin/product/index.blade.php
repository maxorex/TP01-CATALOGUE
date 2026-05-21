<x-layout title="DevGear - Admin produits">

    <main class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>
                Gestion des produits
            </h1>

            <a href="{{ route('home') }}" class="btn btn-outline-light">
                Retour au menu
            </a>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <h2>Liste des produits</h2>

            <a href="{{ route('admin.product-add-form') }}" class="btn btn-primary">
                Ajouter un nouveau produit
            </a>
        </div>

        <div class="card">
            <div class="card-body">

                <table class="table align-middle table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom du produit</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($weapons as $weapon)
                            <tr>
                                <td>{{ $weapon->id }}</td>

                                <td>
                                    {{ $weapon->name }}
                                </td>

                                <td>
                                    {{ $weapon->price }} $
                                </td>

                                <td>
                                    <a href="{{ route('admin.product-edit-form', $weapon->id) }}"
                                        class="btn btn-outline-primary">
                                        Modifier
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-secondary">
                                Aucun produit trouvé.
                            </div>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>


    </main>

</x-layout>
