<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientendController;
use App\Http\Controllers\AdminendController;
use App\Http\Controllers\LoginController;

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


Route::get('login', [LoginController::class,'loginpage']);
Route::post('signin', [LoginController::class,'signin']);



Route::get('/', [ClientendController::class,'landingpage']);
Route::get('aboutus', [ClientendController::class,'aboutus']);
Route::get('properties-in-kenya/{str}', [ClientendController::class,'houselistings']);
Route::get('find-properties', [ClientendController::class,'filterproperties']);
Route::get('view-property/{listingtype}/{location}/{region}/{description}/{id}', [ClientendController::class,'houseview']);
Route::post('interested/{type}', [ClientendController::class,'potential']);
Route::get('property_type/{type}', [ClientendController::class,'propertyTypes']);
Route::get('located/{region}/{id}', [ClientendController::class,'filteropts']);

Route::get('contact_for_sale', [ClientendController::class,'rentout']);
Route::get('uploadvideo', [ClientendController::class,'uploadvideo']);
Route::get('privacy', [ClientendController::class,'privacy']);
Route::get('find-blogs', [ClientendController::class,'blogpage']);
Route::post('searchblog', [ClientendController::class,'searchblogs']);
Route::get('terms', [ClientendController::class,'terms']);

Route::get('read-blog/{description}/{id}', [ClientendController::class,'openblog']);


Route::post('add-video', [ClientendController::class,'addvideo']);
Route::post('sellrequest', [ClientendController::class,'requestsell']);

Route::get('add_newsletter', [ClientendController::class,'addNewsLetterSignup']);


Route::get('logout',[LoginController::class,'logout']);




Route::middleware(['adminonly'])->group(function(){
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
    Route::get('propertiesfilter', [AdminendController::class,'filterproperties']);
    Route::post('searchproperty', [AdminendController::class,'searchproperty']);

    
    Route::get('editimages/{id}', [AdminendController::class,'editimages']);
    Route::put('update-image/{id}', [AdminendController::class,'updateimages']);
    Route::post('add-images/{id}', [AdminendController::class,'addimages']);
    
    Route::get('delete-image/{id}', [AdminendController::class,'deleteimages']);
    
    
    
    
    Route::post('update-property/{id}', [AdminendController::class,'updateproperty']);
    Route::get('delete-property/{id}', [AdminendController::class,'deleteproperty']);
    
    
    Route::get('purchaserequests', [AdminendController::class,'purchaserequests']);
    Route::get('purchaserequestserviced/{id}', [AdminendController::class,'purchaserequestserviced']);

    
    Route::get('rentalrequests', [AdminendController::class,'rentalrequests']);
    Route::get('rentrequestserviced/{id}', [AdminendController::class,'rentrequestserviced']);

 
    Route::get('rentpurchaserequests', [AdminendController::class,'rentpurchaserequests']);
    Route::get('rentpurchaserequestserviced/{id}', [AdminendController::class,'rentpurchaserequestserviced']);


    
    
    Route::get('sellrequests', [AdminendController::class,'sellrequests']);
    Route::get('sellrequestservice/{id}', [AdminendController::class,'sellrequestservice']);

    
    Route::get('blogs', [AdminendController::class,'blogs']);
    Route::get('addblog', [AdminendController::class,'addblog']);
    Route::post('insert-blog', [AdminendController::class,'uploadblog']);
    Route::get('editblog/{id}', [AdminendController::class,'editblog']);
    Route::put('update-blog/{id}', [AdminendController::class,'updateblog']);
    Route::get('blogsfilter', [AdminendController::class,'blogsfilter']);
    Route::post('searchblogs', [AdminendController::class,'searchblogs']);
    Route::get('delete-blog/{id}', [AdminendController::class,'deleteblog']);

    
});






