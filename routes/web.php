<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VideosController;


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

Route::get('/', [PostsController::class, 'index']);
Route::get('/create-post', [PostsController::class, 'create']);
Route::get('/articles/{id}', [PostsController::class, 'show']);
Route::get('/articles/{id}/edit', [PostsController::class, 'edit']);
Route::post('/store', [PostsController::class, 'store']);
Route::put('/update/{id}', [PostsController::class, 'update']);
Route::delete('/articles/{id}/delete', [PostsController::class, 'destroy']);

Route::get('/upload-video', [VideosController::class, 'create']);
Route::get('/video/{id}', [VideosController::class, 'show']);
Route::get('/video/{id}/edit', [VideosController::class, 'edit']);
Route::post('/upload-video/store', [VideosController::class, 'store']);
Route::put('/update-video/{id}', [VideosController::class, 'update']);
Route::delete('/delete-video/{id}', [VideosController::class, 'destroy']);
