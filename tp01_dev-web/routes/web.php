<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;


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

Route::get("/profile", [ProfileController::class, "index"])
    ->middleware('auth:client')
    ->name("client.profile");


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

Route::middleware("auth:client")->group(function () {

    Route::get("/checkout", [OrderController::class, "checkout"])->name("order.checkout");

    Route::post("/checkout/create", [OrderController::class, "pay"])->name("order.pay");

    Route::get("/order/confirm", [OrderController::class, "confirm"])->name("order.confirm");

    Route::get("/order/cancel", [OrderController::class, "cancel"])->name("order.cancel");

    Route::get("/orders/history", [OrderController::class, "history"])->name("order.history");
});

Route::middleware(['isAdmin'])->group(function () {

    Route::get("/admin/category", [AdminController::class, "category"])->name("admin.category");
    Route::post("/admin/category/add", [AdminController::class, "categoryAdd"])->name("admin.category-add");
    Route::post("/admin/category", [AdminController::class, "categoryEdit"])->name("admin.category-edit");

    Route::get("/admin/product", [AdminController::class, "product"])->name("admin.product");
    Route::get("/admin/product/add", [AdminController::class, "productAddForm"])->name("admin.product-add-form");
    Route::post("/admin/product/add", [AdminController::class, "productAdd"])->name("admin.product-add");
    Route::get("/admin/product/edit/{id}", [AdminController::class, "productEditForm"])->name("admin.product-edit-form");
    Route::post("/admin/product/edit/{id}", [AdminController::class, "productEdit"])->name("admin.product-edit");

    Route::get("/admin/order", [AdminController::class, "order"])->name("admin.order");
    Route::get("/admin/order/{id}", [AdminController::class, "orderDetails"])->name("admin.order-details");
    Route::post("/admin/order/edit/{id}", [AdminController::class, "orderEdit"])->name("admin.order-edit");
});
