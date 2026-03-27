<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\PageController;

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::get('/weapons/{id}', [WeaponController::class, 'show'])->whereNumber('id')->name('weapons.show');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart', [CartController::class, 'add'])->name('cart.add');

Route::post("/cart/modify", [CartController::class, 'modify'])->name('cart.modify');

Route::get("/cart/delete/{id}", [CartController::class, 'delete'])->name('cart.delete');
