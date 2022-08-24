<?php

use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('books', BooksController::class);

## These are public Routes with auth0 optional either with access token or not
Route::middleware(['auth0.authorize.optional'])->prefix('v1')->group(function(){

  // Route::apiResource('books', BooksController::class);

  Route::resource('books', BooksController::class)->only([
    'index','show'
  ]);

});

## These are protected routes which require access tokens to work
Route::middleware(['auth0.authorize:update:books'])->prefix('v1')->group(function(){

  Route::resource('books', BooksController::class)->only([
    'store', 'update'
  ]);

});

## These are protected routes which require access tokens with a specified scope
Route::middleware(['auth0.authorize'])->prefix('v1')->group(function(){

  Route::resource('books', BooksController::class)->only([
    'destroy'
  ]);

});

