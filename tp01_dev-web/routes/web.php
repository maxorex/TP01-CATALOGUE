<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;

Route::get('/', [WeaponController::class, 'index'])->name('home');