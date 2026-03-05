<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\PageController;

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::get('/weapons/{id}', [ShowController::class, 'show'])->whereNumber('id')->name('weapons.show');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');