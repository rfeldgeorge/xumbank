<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::middleware('auth:sanctum')->prefix('v1')->group(function(){
    Route::get('/users', [UsersController::class, 'Users']);
    Route::post('/create-user', [UsersController::class, 'CreateUser']);
    Route::get('/edit-user/{user}', [UsersController::class, 'EditUser']);
    Route::post('/update-user/{user}', [UsersController::class, 'UpdateUser']);
});