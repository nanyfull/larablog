<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post/{category}/category',[App\Http\Controllers\Api\PostController::class, 'category']);
Route::get('/post/{url_clean}/url_clean',[App\Http\Controllers\Api\PostController::class, 'url_clean']);

Route::get('/category',[App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::get('/category/all',[App\Http\Controllers\Api\CategoryController::class, 'all']);
