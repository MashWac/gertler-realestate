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
Route::get('houselistings/{str}', [ClientendController::class,'houselistings']);
Route::get('houseview/{id}', [ClientendController::class,'houseview']);
Route::post('interested/{type}', [ClientendController::class,'potential']);
Route::get('rentout', [ClientendController::class,'rentout']);
Route::get('uploadvideo', [ClientendController::class,'uploadvideo']);
Route::post('add-video', [ClientendController::class,'addvideo']);
Route::post('sellrequest', [ClientendController::class,'requestsell']);




Route::get('dashboard', [AdminendController::class,'dashboard']);
Route::get('locations', [AdminendController::class,'locations']);
Route::get('add-location', [AdminendController::class,'addlocations']);
Route::post('insert-location', [AdminendController::class,'insertlocations']);
Route::get('edit-location/{id}', [AdminendController::class,'editlocation']);
Route::post('update-location/{id}', [AdminendController::class,'updatelocation']);
Route::get('delete-location/{id}', [AdminendController::class,'deletelocation']);




Route::get('viewusers', [AdminendController::class,'viewadmins']);
Route::get('add-admin', [AdminendController::class,'addadmin']);
Route::post('insert-user', [AdminendController::class,'insertadmin']);
Route::get('edit-admin/{id}', [AdminendController::class,'editadmin']);
Route::put('update-user/{id}', [AdminendController::class,'updateadmin']);
Route::get('delete-admin/{id}', [AdminendController::class,'deleteadmin']);





Route::get('uploads', [AdminendController::class,'uploads']);
Route::get('addlisting', [AdminendController::class,'addlisting']);
Route::post('insert-listing', [AdminendController::class,'uploadhousedetails']);
Route::get('viewpurchaselistings/{str}', [AdminendController::class,'viewpurchaselistings']);
Route::get('edit-property/{id}', [AdminendController::class,'editproperty']);
Route::put('update-listing/{id}', [AdminendController::class,'updateproperty']);

Route::get('editimages/{id}', [AdminendController::class,'editimages']);
Route::put('update-image/{id}', [AdminendController::class,'updateimages']);
Route::post('add-images/{id}', [AdminendController::class,'addimages']);

Route::get('delete-image/{id}', [AdminendController::class,'deleteimages']);




Route::post('update-property/{id}', [AdminendController::class,'updateproperty']);
Route::get('delete-property/{id}', [AdminendController::class,'deleteproperty']);


Route::get('purchaserequests', [AdminendController::class,'purchaserequests']);

Route::get('rentalrequests', [AdminendController::class,'rentalrequests']);

Route::get('sellrequests', [AdminendController::class,'sellrequests']);

Route::get('blogs', [AdminendController::class,'blogs']);




