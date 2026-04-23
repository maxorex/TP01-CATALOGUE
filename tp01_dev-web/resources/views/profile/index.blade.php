<x-layout title="Mon profil" css="auth.css">
    <x-profile.nav />

    <div class="container auth-page profile-page">
        <div class="profile-shell">
            <h1 class="profile-title">Mon profil</h1>
            <div class="profile-content">
                <div class="profile-section">
                    <h2 class="profile-section-title">Informations personnelles</h2>
                    <p><strong>Nom :</strong> {{ $client->name }}</p>
                    <p><strong>Email :</strong> {{ $client->email }}</p>
                    <p><strong>Numéro de téléphone :</strong> {{ $client->phone ?? 'Non spécifié' }}</p>
                    <p><strong>Adresse :</strong> {{ $client->address }}</p>
                    <p><strong>Ville :</strong> {{ $client->city }}</p>
                    <p><strong>Code postal :</strong> {{ $client->postal_code }}</p>
                    <p><strong>Province :</strong> {{ $client->province }}</p>

                </div>
            </div>
        </div>
    </div>

    <x-footer />
</x-layout>
