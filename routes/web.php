<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin-login',[UserController::class,'login']);
Route::post('/admin-signin',[AuthController::class,'adminlogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::group(['middleware'=>['admin']],function(){
    Route::get('/admin-dashboard/index',[AdminController::class,'index']);
    Route::get('/admin-dashboard/genres',[AdminController::class,'genres']);
    Route::post('/admin-dashboard/creategenres',[AdminController::class,'createGenres']);
    Route::post('/admin-dashboard/deletegenres',[AdminController::class,'deleteGenres']);
    Route::get('/admin-dashboard/country',[AdminController::class,'country']);
    Route::post('/admin-dashboard/createcountry',[AdminController::class,'createCountry']);
    Route::post('/admin-dashboard/deletecountry',[AdminController::class,'deleteCountry']);
    Route::get('/admin-dashboard/articletype',[AdminController::class,'article']);
    Route::post('/admin-dashboard/createarticle',[AdminController::class,'createArticle']);
    Route::post('/admin-dashboard/deletearticle',[AdminController::class,'deleteArticle']);
});