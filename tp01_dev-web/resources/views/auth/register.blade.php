<x-layout titre="DevGear - Créer un compte">

    <div>
        <div>

            <a href="{{ route('home') }}">
                ← Accueil
            </a>
            <h2>Créer un compte</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    @error('name')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}">
                </div>

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
                    <div>Minimum 8 caractères.</div>
                </div>

                <div>
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div>

                <button type="submit">S'inscrire</button>
            </form>

            <hr>
            <p>
                Déjà un compte ?
                <a href="{{ route('loginForm') }}">Se connecter</a>
            </p>

        </div>
    </div>

</x-layout>