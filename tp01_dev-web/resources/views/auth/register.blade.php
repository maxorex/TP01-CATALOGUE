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
                    @error('firstname')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}">
                </div>

                <div></div>

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
                    @error('address')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" value="{{ old('address') }}">
                </div>

                <div>
                    @error('city')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="city">Ville</label>
                    <input type="text" id="city" name="city" value="{{ old('city') }}">
                </div>

                <div>
                    @error('postal_code')
                        <div role="alert">
                            <strong>Erreur</strong> {{ $message }}
                        </div>
                    @enderror
                    <label for="postal_code">Code postal</label>
                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
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
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
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