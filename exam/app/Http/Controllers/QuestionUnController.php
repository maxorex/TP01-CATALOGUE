<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Channel;

class QuestionUnController extends Controller
{
    // TODO: question 1

    public function index()
    {
        $categories = Category::all();

        return view('questions.un', [
            'categories' => $categories,
        ]);
    }
}
