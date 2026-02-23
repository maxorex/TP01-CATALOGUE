<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;

Route::get('/', [App\Http\Controllers\WeaponController::class, 'index'])->name('home');