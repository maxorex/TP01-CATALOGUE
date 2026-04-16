<x-layout title="modifier mon mot de passe" css="auth.css">

    <div class="container auth-page">
        <div class="profile-card">
        <h2 class="page-title">Modifier mon mot de passe</h2>

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

        <form method="POST" action="{{ route('profile.update-password') }}">
            @csrf

            <div>
                @error('current_password')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="current_password">Mot de passe actuel</label>
                <input type="password" id="current_password" name="current_password">
            </div>

            <div>
                @error('new_password')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="new_password">Nouveau mot de passe</label>
                <input type="password" id="new_password" name="new_password">
            </div>

            <div>
                <label for="new_password_confirmation">Confirmer le nouveau mot de passe</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation">
            </div>

            <button type="submit">Enregistrer</button>
        </form>

        </div>
    </div>


    <x-footer />

</x-layout>
