<x-layout titre="DevGear - Connexion" css="auth.css">

    <div class="auth-page">
        <div class="auth-card">

            <a href="{{ route('home') }}">
                ← Accueil
            </a>
            <h2 class="h2">Connexion</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    @error('email')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="email">Courriel</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    @error('password')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>

                <button type="submit">Se connecter</button>
            </form>

            <hr>
            <p>
                Pas encore de compte ?
                <a href="{{ route('registerForm') }}">Créer un compte</a>
            </p>

        </div>
    </div>

</x-layout>
