<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profileEditInfo()
    {
        $client = auth('client')->user();

        return view('profile.edit-info', [
            'client' => $client,
        ]);
    }

    public function profileEditPassword()
    {
        $client = auth('client')->user();

        return view('profile.edit-password', [
            'client' => $client,
        ]);
    }

    public function index()
    {
        $client = auth('client')->user();

        return view('profile.index', [
            'client' => $client,
        ]);
    }

    public function profileUpdateInfo(Request $request)
    {
        $donnees = $request->validate([
            'name' => 'required|string|min:2|max:30',
            'firstname' => 'required|string|min:2|max:30',
            'address' => 'required|string|min:5|max:100',
            'city' => 'required|string|min:3|max:30',
            'postal_code' => 'required|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/',
            'province' => 'required|size:2|in:QC,ON,NS,NB,MB,BC,PE,SK,AB,NL,NT,YT,NU',
            'phone' => 'nullable|regex:/^\d{3}-\d{3}-\d{4}$/',
        ]);

        $client = auth('client')->user();

        $client->name = $donnees['name'];
        $client->first_name = $donnees['firstname'];
        $client->address = $donnees['address'];
        $client->city = $donnees['city'];
        $client->postal_code = $donnees['postal_code'];
        $client->province = $donnees['province'];

        if (isset($donnees['phone'])) {
            $client->phone = $donnees['phone'];
        }

        $client->save();

        return redirect()->route('profile.edit-info')
            ->with('success', 'Vos informations ont ete mises a jour.');
    }

    public function profileUpdatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password:client'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $client = auth('client')->user();

        $client->password = Hash::make($validated['new_password']);
        $client->save();

        return redirect()->route('profile.edit-password')
            ->with('success', 'Votre mot de passe a ete mis a jour.');
    }
}
