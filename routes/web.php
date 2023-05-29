<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/{id}/edit', [UserController::class, 'edit']);
Route::post('/users/create', [UserController::class, 'store']);
Route::delete('/users/{id}/delete', [UserController::class, 'delete']);
Route::post('/sign-up', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::post('/article/create', [ArticleController::class, 'create'])->middleware('is_admin');
Route::post('/article/{id}/edit', [ArticleController::class, 'edit'])->middleware('is_admin');
Route::post('/article/{id}delete', [ArticleController::class, 'delete'])->middleware('is_admin');

