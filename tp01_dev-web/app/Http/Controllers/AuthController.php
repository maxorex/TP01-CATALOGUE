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
    public function register(LoginRequest $request)
    {
        $donnees = $request->validated();


        $client = new Client();
        $client->name = $donnees["name"];
        $client->email = $donnees["email"];
        $client->password = Hash::make($donnees["password"]);

        $client->save();

        Auth::guard('client')->login($client);

        return redirect()->route('home')->with("success", "Votre compte a été créé avec succès !");
    }

    public function loginForm()
    {
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
        Auth::guard('client')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with("success", "Vous avez été déconnecté");
    }
}
