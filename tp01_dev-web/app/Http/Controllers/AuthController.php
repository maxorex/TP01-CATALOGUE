<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    /**
     * affiche le formulaire d'insciption
     *
     * @return View
     */
    public function registerForm()
    {
        return view('auth.register');
    }

    /**
     * Traite le formulaire d'insciption
     *
     * @param Request $request
     * @return Redirect
     */
    public function register(RegisterRequest $request)
    {
        // TODO[TP03]: Rediriger vers la page de profil apres inscription (et non home)
        // selon le cahier: creation de compte -> authentification auto -> page profil.
        $donnees = $request->validated();


        $client = new Client();
        $client->name = $donnees["name"];
        $client->firstname = $donnees["firstname"];
        $client->email = $donnees["email"];
        $client->password = Hash::make($donnees["password"]);
        $client->address = $donnees["address"];
        $client->city = $donnees["city"];
        $client->postal_code = $donnees["postal_code"];
        $client->province = $donnees["province"];
        
        if (isset($donnees["phone"])) {
            $client->phone = $donnees["phone"];
        }

        $client->save();

        Auth::guard('client')->login($client);

        return redirect()->route('home')->with("success", "Votre compte a été créé avec succès !");
    }

    public function loginForm()
    {
        // TODO[TP03]: Verifier la coherence route/nommage avec /connexion.
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::guard('client')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'))->with("success", "Vous êtes connecté !");
        }

        return back()->withErrors([
            "email" => "Les informations d'identification sont invalides"
        ]);
    }

    public function logout(Request $request)
    {
        // TODO[TP03]: Verifier la coherence route/nommage avec /deconnexion.
        Auth::guard('client')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with("success", "Vous avez été déconnecté");
    }
}
