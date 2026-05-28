<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class QuestionDeuxController extends Controller
{
    // TODO: question 2
    public function index($id)
    {
        $category = Category::findOrFail($id);
        $spectators = 0;

        foreach($category->channels as $channel){
            $spectators += $channel->viewers;
        } 

        return view('questions.deux', [
            'category' => $category,
            'spectators' => $spectators
        ]);
    }
}
