<x-layout title="DevGear - Admin categories">

    <main class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>Gestion des catégories</h1>

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


        <div class="card">
            <div class="card-body">
                <h2>Créer une catégorie</h2>

                <form action="{{ route('admin.category-add') }}" method="POST">
                    @csrf
                    <div class="d-flex ">

                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Entrer un nom" required>

                        <button type="submit" class="btn btn-success">
                            Créer
                        </button>
                    </div>
                </form>
            </div>
        </div>



        <h2>Liste des catégories</h2>

        <table class="table align-middle table-dark">
            <thead>
                <tr>
                    <th>Nom de la catégorie</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>
                            <form action="{{ route('admin.category-edit') }}" method="POST"
                                class="d-flex align-items-center">
                                @csrf
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <input type="text"name="name" value="{{ $category->name }}"
                                    required>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center text-muted">
                            Aucune catégorie trouvée
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </main>

</x-layout>
