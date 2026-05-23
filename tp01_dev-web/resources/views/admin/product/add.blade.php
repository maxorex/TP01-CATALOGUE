<x-layout title="DevGear - Admin ajout de produit" css="admin.css">

    <main class="container py-4">
        <div class="row justify-content-center">
            <div class="card">

                <h4>Ajouter un produit</h4>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.product-add') }}" enctype="multipart/form-data">
                        @csrf

                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="row">
                            <div class="col-6">
                                <label for="price" class="form-label">Prix</label>
                                <input type="decimal" min="0" class="form-control" id="price" name="price">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" min="0" class="form-control" id="stock" name="stock">
                                @error('stock')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="category_id" class="form-label">Categorie</label>

                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="">Choisir une categorie</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.product') }}" class="btn btn-light">Retour</a>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</x-layout>
