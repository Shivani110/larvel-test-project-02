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

Route::get('/',[UserController::class,'prpartnerlogin']);
Route::get('/all-publication',[UserController::class,'allpublications']);

Route::get('/login',[UserController::class,'login']);
Route::post('/admin-signin',[AuthController::class,'adminlogin']);
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/signin',[AuthController::class,'authlogin']);

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
    Route::get('/admin-dashboard/insertpublication',[AdminController::class,'publication']);
    Route::post('/admin-dashboard/publications',[AdminController::class,'createPublications']);
    Route::get('/admin-dashboard/publicationslist',[AdminController::class,'publicationlist']);
    Route::get('/admin-dashboard/insertpublication/{id}',[AdminController::class,'editpublications']);
    Route::post('/admin-dashboard/updatepublication',[AdminController::class,'updatepublications']);
    Route::post('/admin-dashboard/deletepublication',[AdminController::class,'deletePublications']);
});