<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::any('{slug}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});