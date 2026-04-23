<x-layout title="modifier mon mot de passe" css="auth.css">

    <x-profile.nav />

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

        <form method="POST" action="{{ route('profile.update-password') }}" class="row g-3">
            @csrf

            <div class="col-12">
                @error('current_password')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="current_password" class="form-label">Mot de passe actuel</label>
                <input type="password" id="current_password" name="current_password" class="form-control">
            </div>

            <div class="col-12">
                @error('new_password')
                    <div role="alert" class="auth-error">
                        <strong>Erreur</strong> {{ $message }}
                    </div>
                @enderror
                <label for="new_password" class="form-label">Nouveau mot de passe</label>
                <input type="password" id="new_password" name="new_password" class="form-control">
            </div>

            <div class="col-12">
                <label for="new_password_confirmation" class="form-label">Confirmer le nouveau mot de passe</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-accent">Enregistrer</button>
            </div>
        </form>

        </div>
    </div>


    <x-footer />

</x-layout>
