<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//ここまでがログイン・ログアウトのルート


Route::prefix('status')->group(function () {
    Route::get('/add', [StatusController::class, 'add']); //これで作成画面へ移行させる
    Route::post('/add', [StatusController::class, 'create']);
});

Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index']);
    Route::get('/add', [ClientController::class, 'add']); //これで作成画面へ移行させる
    Route::post('/add', [ClientController::class, 'create']);
});
Route::get('/relation', [StatusController::class, 'relate']); //リレーション
