<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index'])->name('home');

//Route::group(['auth','user_is_admin'],function (){
    //Units
    Route::get('units',[UnitController::class,'index']);
    Route::post('units',[UnitController::class,'store']);
    Route::delete('units',[UnitController::class,'delete']);
    //Categories
    Route::get('categories',[CategoryController::class,'index'])->name('categories');
    //Products
    Route::get('products', [ProductController::class,'index']);
    //Tag
    Route::get('tags',[TagController::class,'index'])->name('tags');

    //Payments
    //Orders
    //Shipments
    //<i class="far fa-star"></i>
    //countries
    Route::get('countries',[CountryController::class,'index'])->name('countries');
    //cities
    Route::get('cities',[CityController::class,'index'])->name('cities');
    //States
    Route::get('states',[StateController::class,'index'])->name('states');
    //Reviews
    Route::get('reviews',[ReviewController::class,'index'])->name('reviews');
    //Tickets
    Route::get('tickets',[TicketController::class,'index'])->name('tickets');
    //Roles
    Route::get('roles',[RoleController::class,'index'])->name('roles');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
