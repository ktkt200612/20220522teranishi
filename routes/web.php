<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StatusController;


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

Route::get('/status', [StatusController::class, 'add']);
Route::post('/status/create', [StatusController::class, 'create']);
Route::post('/status/update', [StatusController::class, 'update']);

Route::get('/relate', [StatusController::class, 'relate']);
