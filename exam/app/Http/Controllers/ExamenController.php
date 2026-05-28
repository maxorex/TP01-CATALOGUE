<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index($numeroQuestion)
    {
        return view('examen.index', [
            'numeroQuestion' => $numeroQuestion
        ]);
    }
}
