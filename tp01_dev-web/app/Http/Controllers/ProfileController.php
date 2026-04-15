<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileEditInfo()
    {
        return view('profile.edit-info');
    }

    public function profileEditPassword()
    {
        return view('profile.edit-password');
    }



}
