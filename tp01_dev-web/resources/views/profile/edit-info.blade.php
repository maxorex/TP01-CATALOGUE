<x-layout title="Modifier mon profil" css="auth.css">

    <x-profile.nav />
    
    <div class="container auth-page">
        <div class="profile-card">
        <h2 class="page-title">Modifier mon profil</h2>

        @if (session('success'))
            <div role="status" class="auth-message">
                <strong>Succes</strong> {{ session('success') }}
            </div>
        @endif

        @if (session('warning'))
            <div role="alert" class="auth-error">
                <strong>Attention</strong> {{ session('warning') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update-info') }}" class="row g-3">
            @csrf

            <div class="col-12">
                @error('name')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $client->name) }}">
            </div>

            <div class="col-12">
                @error('firstname')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" id="firstname" name="firstname" class="form-control" value="{{ old('firstname', $client->first_name) }}">
            </div>

            <div class="col-12">
                @error('address')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="address" class="form-label">Adresse</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $client->address) }}">
            </div>

            <div class="col-12 col-md-6">
                @error('city')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="city" class="form-label">Ville</label>
                <input type="text" id="city" name="city" class="form-control" value="{{ old('city', $client->city) }}">
            </div>

            <div class="col-12 col-md-6">
                @error('postal_code')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="postal_code" class="form-label">Code postal</label>
                <input type="text" id="postal_code" name="postal_code" class="form-control" value="{{ old('postal_code', $client->postal_code) }}">
            </div>

            <div class="col-12 col-md-6">
                @error('province')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="province" class="form-label">Province</label>
                <select id="province" name="province" class="form-select">
                    <option value="QC"> QC </option>
                    <option value="ON"> ON </option>
                    <option value="NB"> NB </option>
                    <option value="NS"> NS </option>
                    <option value="PE"> PE </option>
                    <option value="NL"> NL </option>
                    <option value="MB"> MB </option>
                    <option value="SK"> SK </option>
                    <option value="AB"> AB </option>
                    <option value="BC"> BC </option>
                </select>
            </div>

            <div class="col-12 col-md-6">
                @error('phone')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="phone" class="form-label">Téléphone (optionnel)</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
            </div>
        </form>

        </div>
    </div>


    <x-footer />

</x-layout>
