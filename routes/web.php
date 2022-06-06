<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//ここまでがログイン・ログアウトのルート


Route::get('/add', [ClientController::class, 'add']); //これで作成画面へ移行させる
Route::post('/add', [ClientController::class, 'create']);
Route::get('/index', [ClientController::class, 'index']); 
