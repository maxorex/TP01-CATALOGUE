<?php

namespace App\Http\Controllers;

use App\Models\Weapon;

class ShowController extends Controller
{
    public function show($id)
    {
        $weapon = Weapon::with('category')->findOrFail($id);

        return view('weapons._show', [
            'weapon' => $weapon,
        ]);
    }
}
