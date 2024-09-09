<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostApiController;

Route::get('posts', [PostApiController::class, 'index']);
Route::get('post/{id}', [PostApiController::class, 'show']);
