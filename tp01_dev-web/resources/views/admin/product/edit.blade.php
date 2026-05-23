<x-layout title="DevGear - Admin modification de produit" css="admin.css">

    <main class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier un produit</h4>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.product-edit', $weapon->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $weapon->name) }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $weapon->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="row">
                            <div class="col-6">
                                <label for="price" class="form-label">Prix</label>
                                <input type="decimal" min="0" class="form-control" id="price" name="price"
                                    value="{{ old('price', $weapon->price) }}">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" min="0" class="form-control" id="stock" name="stock"
                                    value="{{ old('stock', $weapon->stock) }}">
                                @error('stock')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="category_id" class="form-label">Categorie</label>
                                <select class="form-select" id="category_id" name="category_id" required>

                                    <option value="{{ old('category_id', $weapon->category_id) }}">
                                        {{ old('category', $weapon->category->name) }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="image" class="form-label">Nouvelle image avec format png</label>
                                <input type="file" name="image" id="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.product') }}" class="btn btn-light">Retour</a>
                            <button type="submit" class="btn btn-primary">Mettre a jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</x-layout>
