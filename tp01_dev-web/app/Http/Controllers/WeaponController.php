<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Models\Category;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index(Request $request)
    {
        $filtres = collect([]);

        if ($request->has("recherche")) {
            $recherche = $request->recherche;
            $weapons = Weapon::where("nom", "LIKE", "%$recherche%")->orWhere("description", "LIKE", "%$recherche%")->get();
        } elseif ($request->has("categories")) {
            $categories = $request->categories;

            $weapons = Weapon::whereIn('category_id', $categories)->get();

            $filtres = collect($request->categories);
        } else {
            $weapons = Weapon::all();
        }

        return view('weapons.index', [
            "weapons" => $weapons,
            "categories" => Category::all(),
            "filtres" => $filtres
        ]);
    }

    public function show($id)
    {
        return view('weapons._show', [
            "weapon" => Weapon::findOrFail($id)
        ]);
    }
}
