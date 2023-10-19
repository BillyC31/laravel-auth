<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/create', function () {
    return view('layouts/create');
});

Route::get('/edit', function () {
    return view('layouts/edit');
});

Route::get('/home', [NewsController::class, 'index'])->name('home');
Route::get('/detail/{new}', [NewsController::class,"show"]);
Route::post('/post',[NewsController::class,'newnews']);
Route::post('/post/{new}',[NewsController::class,'destroy']);
Route::get('/edit/{new}',[NewsController::class,'edit']);
Route::put('/edit/{new}',[NewsController::class,'update']);