<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// TODO[TP03]: Ajouter les routes demandees en FR:
// - GET|POST /inscription (vue + traitement)
// - GET|POST /connexion (vue + traitement)
// - POST|GET /deconnexion selon le cahier
// - GET|POST /profil (infos + changement mot de passe sur la meme page)
// Garder la retrocompatibilite des routes existantes si necessaire.

Route::get('/', [WeaponController::class, 'index'])->name('home');

Route::get('/weapons/{id}', [WeaponController::class, 'show'])->whereNumber('id')->name('weapons.show');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::post("/cart/modify", [CartController::class, 'modify'])->name('cart.modify');

Route::get("/cart/delete/{id}", [CartController::class, 'delete'])->name('cart.delete');


Route::get("/profile/info", [ProfileController::class, "profileEditInfo"])
    ->middleware('auth:client')
    ->name("profile.edit-info");

Route::get("/profile/password", [ProfileController::class, "profileEditPassword"])
    ->middleware('auth:client')
    ->name("profile.edit-password");

Route::post("/profile/info", [ProfileController::class, "profileUpdateInfo"])
    ->middleware('auth:client')
    ->name("profile.update-info");

Route::post("/profile/password", [ProfileController::class, "profileUpdatePassword"])
    ->middleware('auth:client')
    ->name("profile.update-password");

// TODO[TP03]: Le TP demande une route /profil centralisant:
// - formulaire modification des informations client (sans courriel)
// - formulaire modification du mot de passe (3 champs)
// Evaluer si cette separation /profile/info + /profile/password doit etre conservee.


Route::middleware('guest:client')->group(function () {

    Route::get("/register", [AuthController::class, "registerForm"])
        ->name("registerForm");

    Route::post("/register", [AuthController::class, "register"])
        ->name("register");

    Route::get("/login", [AuthController::class, "loginForm"])
        ->name("loginForm");

    Route::post("/login", [AuthController::class, "login"])
        ->middleware('throttle:5,1')
        ->name("login");
});

Route::post("/logout", [AuthController::class, "logout"])
    ->middleware('auth:client')
    ->name("logout");
