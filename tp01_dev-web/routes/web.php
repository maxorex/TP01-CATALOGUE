<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::get('/weapons/{id}', [WeaponController::class, 'show'])->whereNumber('id')->name('weapons.show');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');