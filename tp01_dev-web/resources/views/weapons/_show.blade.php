<x-layout title="Détails du produit">

    <x-header />
    <x-navbar />

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset("images/{$weapon->imagePath}") }}" class="img-fluid" alt="{{ $weapon->name }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $weapon->name }}</h1>
                <p>{{ $weapon->description }}</p>
                <p class="h4">Prix: ${{ $weapon->price }}</p>
                <P>{{ $weapon->category->name }}</P>
                <P>Quantité disponible: {{ $weapon->amount }}</P>
            </div>
        </div>
    </section>

    <x-footer />

</x-layout>
