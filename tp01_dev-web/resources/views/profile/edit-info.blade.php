<x-layout title="modifier mes informations">

    <div class="container">
        <h2 class="page-title">Modifier mes informations</h2>

        @if (session('success'))
            <div role="status">
                <strong>Succes</strong> {{ session('success') }}
            </div>
        @endif

        @if (session('warning'))
            <div role="alert">
                <strong>Attention</strong> {{ session('warning') }}
            </div>
        @endif

        <form method="POST" action="{{ route('profile.update-info') }}">
            @csrf

            <div>
                @error('name')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name', $client->name) }}">
            </div>

            <div>
                @error('firstname')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $client->firstname) }}">
            </div>

            <div>
                @error('address')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="address">Adresse</label>
                <input type="text" id="address" name="address" value="{{ old('address', $client->address) }}">
            </div>

            <div>
                @error('city')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="city">Ville</label>
                <input type="text" id="city" name="city" value="{{ old('city', $client->city) }}">
            </div>

            <div>
                @error('postal_code')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="postal_code">Code postal</label>
                <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code', $client->postal_code) }}">
            </div>

            <div>
                @error('province')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="province">Province</label>
                <select id="province" name="province">
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

            <div>
                @error('phone')
                    <div role="alert">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="phone">Téléphone (optionnel)</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $client->phone) }}">
            </div>

            <button type="submit">enregistrer</button>
        </form>

    </div>


    <x-footer />

</x-layout>
