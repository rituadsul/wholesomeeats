<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Wholesome Eats API Routes  —  Outlet 777196074
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

/* ── Public routes ─────────────────────────────────────────── */
Route::prefix('menu')->group(function () {
    Route::get('/',             [MenuController::class, 'index']);
    Route::get('/featured',     [MenuController::class, 'featured']);
    Route::get('/bestsellers',  [MenuController::class, 'bestsellers']);
    Route::get('/{slug}',       [MenuController::class, 'show']);
});

/* ── Authenticated routes ───────────────────────────────────── */
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', fn (Request $req) => $req->user());

    Route::prefix('orders')->group(function () {
        Route::get('/',                     [OrderController::class, 'index']);
        Route::post('/',                    [OrderController::class, 'store']);
        Route::get('/{order}',              [OrderController::class, 'show']);
        Route::patch('/{order}/cancel',     [OrderController::class, 'cancel']);
    });
});
