<x-layout title="DevGear - Créer un compte" css="auth.css">

    <div class="auth-page">
        <div class="auth-card">

            <a href="{{ route('home') }}" class="text-decoration-none d-inline-block mb-3">
                ← Accueil
            </a>
            <h2 class="h3 fw-bold">Créer un compte</h2>

            <form method="POST" action="{{ route('register') }}" class="row g-3">
                @csrf

                <div class="col-12">
                    @error('name')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required minlength="2" maxlength="30">
                </div>

                <div class="col-12">
                    @error('firstname')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="form-control" required minlength="2" maxlength="30">
                </div>

                <div class="col-12">
                    @error('email')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required maxlength="255">
                </div>

                <div class="col-12">
                    @error('address')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="address" class="form-label">Adresse</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control" required minlength="5" maxlength="100">
                </div>

                <div class="col-12 col-md-6">
                    @error('city')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="city" class="form-label">Ville</label>
                    <input type="text" id="city" name="city" value="{{ old('city') }}" class="form-control" required minlength="2" maxlength="30">
                </div>

                <div class="col-12 col-md-6">
                    @error('postal_code')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="postal_code" class="form-label">Code postal</label>
                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" class="form-control" required maxlength="7" placeholder="H1H 1H1" pattern="^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$" title="Format attendu: H1H 1H1">
                </div>

                <div class="col-12 col-md-6">
                    @error('province')
                        <div role="alert" class="auth-error mb-2">
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
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="phone" class="form-label">Téléphone (optionnel)</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" maxlength="12" placeholder="450-963-7453" pattern="^\d{3}-\d{3}-\d{4}$" title="Format attendu: 450-963-7453">
                </div>

                <div class="col-12">
                    @error('password')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control" required minlength="8">
                    <div class="auth-helper">Minimum 8 caractères.</div>
                </div>

                <div class="col-12">
                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required minlength="8">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-accent">S'inscrire</button>
                </div>
            </form>

            <hr>
            <p class="mb-0">
                Déjà un compte ?
                <a href="{{ route('loginForm') }}">Se connecter</a>
            </p>

        </div>
    </div>

</x-layout>