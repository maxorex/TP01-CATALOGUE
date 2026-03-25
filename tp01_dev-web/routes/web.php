<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\PageController;

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::get('/weapons/{id}', [ShowController::class, 'show'])->whereNumber('id')->name('weapons.show');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('panier');

Route::post('/cart', [CartController::class, 'add'])->name('panier.add');

Route::post("/cart/modify", [CartController::class, 'modify'])->name('panier.modify');
