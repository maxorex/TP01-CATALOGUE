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
        return view('profile.edit-info', [
            'client' => Auth::guard('client')->user(),
        ]);
    }

    public function profileEditPassword()
    {
        return view('profile.edit-password');
    }

    public function profileUpdateInfo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:30',
            'firstname' => 'required|string|min:2|max:30',
            'address' => 'required|string|min:5|max:100',
            'city' => 'required|string|min:2|max:30',
            'postal_code' => 'required|regex:/^[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d$/',
            'province' => 'required|in:QC,ON,NB,NS,PE,NL,MB,SK,AB,BC',
            'phone' => 'nullable|regex:/^\d{3}-\d{3}-\d{4}$/',
        ]);

        /** @var Client|null $client */
        $client = Auth::guard('client')->user();
        abort_unless($client instanceof Client, 403);
        $client->fill($validated);
        $client->save();

        return redirect()->route('profile.edit-info')
            ->with('success', 'Vos informations ont ete mises a jour.');
    }

    public function profileUpdatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed|different:current_password',
        ]);

        /** @var Client|null $client */
        $client = Auth::guard('client')->user();
        abort_unless($client instanceof Client, 403);

        if (!Hash::check($validated['current_password'], $client->password)) {
            return back()
                ->withErrors(['current_password' => 'Le mot de passe actuel est invalide.'])
                ->withInput();
        }

        if (Hash::check($validated['new_password'], $client->password)) {
            return back()
                ->withErrors(['new_password' => 'Le nouveau mot de passe doit etre different de l\'actuel.'])
                ->withInput();
        }

        $client->password = Hash::make($validated['new_password']);
        $client->save();

        return redirect()->route('profile.edit-password')
            ->with('success', 'Votre mot de passe a ete mis a jour.');
    }


}
