<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientendController;
use App\Http\Controllers\AdminendController;

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

Route::get('landing', [ClientendController::class,'landingpage']);
Route::get('aboutus', [ClientendController::class,'aboutus']);
Route::get('houselistings', [ClientendController::class,'houselistings']);
Route::get('houseview', [ClientendController::class,'houseview']);
Route::get('rentout', [ClientendController::class,'rentout']);



Route::get('dashboard', [AdminendController::class,'dashboard']);

Route::get('uploads', [AdminendController::class,'uploads']);
Route::get('addlisting', [AdminendController::class,'addlisting']);
Route::get('viewpurchaselistings', [AdminendController::class,'viewpurchaselistings']);


Route::get('purchaserequests', [AdminendController::class,'purchaserequests']);

Route::get('rentalrequests', [AdminendController::class,'rentalrequests']);

Route::get('sellrequests', [AdminendController::class,'sellrequests']);

Route::get('blogs', [AdminendController::class,'blogs']);



