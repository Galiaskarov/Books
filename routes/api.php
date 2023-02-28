<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\AuthorsController;
use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\GenresController;
use App\Http\Controllers\Api\Personal\Authors\UpdateController;
use App\Http\Controllers\Api\Personal\Books\DestroyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Public routes
Route::post('/login',LoginController::class);

Route::apiResource('books',BooksController::class);

Route::apiResource('genres',GenresController::class);

Route::apiResource('authors',AuthorsController::class);

//Protected routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::put('/authors/{author}',UpdateController::class);
    Route::delete('/books/{book}', DestroyController::class);
    Route::put('/books/{book}',\App\Http\Controllers\Api\Personal\Books\UpdateController::class);
});
