<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\UserController;
use App\Models\Address;
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
Route::get('/users',[UserController::class,'index']);

//Products
Route::get('/products',[\App\Http\Controllers\Api\ProductController::class,'index']);
Route::get('/products/{id}',[\App\Http\Controllers\Api\ProductController::class,'show']);
Route::post('/product',[\App\Http\Controllers\Api\ProductController::class,'store']);
Route::put('/product',[\App\Http\Controllers\Api\ProductController::class,'update']);

//Categories
Route::get('/categories',[\App\Http\Controllers\Api\CategoryController::class,'index']);
Route::get('/categories/{id}',[\App\Http\Controllers\Api\CategoryController::class,'show']);
//Tags
Route::get('/tags',[\App\Http\Controllers\Api\TagController::class,'index']);
Route::get('/tags/{id}',[\App\Http\Controllers\Api\TagController::class,'show']);


//general
Route::get('/countries',[CountryController::class,'index']);
Route::get('/countries/{id}/cities',[CountryController::class,'showCities']);
Route::get('/countries/{id}/states',[CountryController::class,'showStates']);


Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
