<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use App\Models\Category;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index()
    {
        //$weapons = Weapon::all();
        //$categories = Category::all();
        return view('products.index', compact('weapons', 'categories'));
    }
}