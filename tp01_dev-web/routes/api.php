<?php

use App\Http\Controllers\WeaponController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/weapons/{id}', [WeaponController::class, 'showAjax'])->name('weapon.showAjax');