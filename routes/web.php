<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OwnController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\LikeController;

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
    $pets = App\Models\Pet::all();
    return view('pets.index', compact('pets'));
});

Route::resource('pets', PetController::class);
Route::resource('owners', OwnerController::class);
Route::resource('owns', OwnController::class);
Route::resource('foods', FoodController::class);
Route::resource('purchases', PurchaseController::class);
Route::resource('likes', LikeController::class);
