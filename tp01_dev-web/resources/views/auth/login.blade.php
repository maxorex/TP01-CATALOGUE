<x-layout title="DevGear - Connexion" css="auth.css">

    <div class="auth-page">
        <div class="auth-card">

            <a href="{{ route('home') }}" class="text-decoration-none d-inline-block mb-3">
                ← Accueil
            </a>
            <h2 class="h3 fw-bold">Connexion</h2>

            <form method="POST" action="{{ route('login') }}" class="row g-3">
                @csrf

                <div class="col-12">
                    @error('email')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="email" class="form-label">Courriel</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>

                <div class="col-12">
                    @error('password')
                        <div role="alert" class="auth-error mb-2">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-accent">Se connecter</button>
                </div>
            </form>

            <hr>
            <p class="mb-0">
                Pas encore de compte ?
                <a href="{{ route('registerForm') }}">Créer un compte</a>
            </p>

        </div>
    </div>

</x-layout>
