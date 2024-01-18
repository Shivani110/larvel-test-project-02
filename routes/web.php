<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PublicationController;

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
Route::get('/admin-login',[UserController::class,'login']);

Route::post('/admin-signin',[AuthController::class,'adminlogin']);
Route::get('/logout',[AuthController::class,'logout']);
Route::post('/signin',[AuthController::class,'authlogin']);
Route::get('/auth-logout',[AuthController::class,'authlogout']);

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
    Route::get('/admin-dashboard/useraccess',[AdminController::class,'userAccess']);
    Route::post('/admin-dashboard/access',[AdminController::class,'userLogin']);
    Route::get('/admin-dashboard/fileupload',[AdminController::class,'fileupload']);
    Route::post('/admin-dashboard/csvupload',[AdminController::class,'importfile']);
    Route::get('/admin-dashboard/export',[AdminController::class,'export']);
    Route::get('/admin-dashboard/accountsetting',[AdminController::class,'accountSetting']);
    Route::post('/admin-password/changepassword',[AdminController::class,'changePassword']);
    Route::get('/admin-dashboard/bundlecategory',[AdminController::class,'bundleCategory']);
    Route::post('/admin-dashboard/createcategory',[AdminController::class,'category']);
    Route::post('/admin-dashboard/deletecategory',[AdminController::class,'deletecategory']);
    Route::get('/admin-dashboard/packagebundle',[AdminController::class,'bundle']);
    Route::post('/admin-dashboard/createbundle',[AdminController::class,'createBundle']);
    Route::post('/admin-dashboard/getpublication',[AdminController::class,'getPublication']);
    Route::get('/admin-dashboard/packagelist',[AdminController::class,'getPackage']);
    Route::get('/admin-dashboard/packagebundle/{id}',[AdminController::class,'editbundle']);
    Route::post('/admin-dashboard/updatebundle',[AdminController::class,'updateBundle']);
    Route::post('/admin-dashboard/deletebundle',[AdminController::class,'deletePackage']);
    Route::get('/admin-dashboard/releasecategory',[AdminController::class,'releaseCategory']);
    Route::post('/admin-dashboard/category',[AdminController::class,'createCategory']);
    Route::post('/admin-dashboard/deletereleasecategory',[AdminController::class,'deleteReleaseCategory']);
    Route::get('/admin-dashboard/pressrelease',[AdminController::class,'pressRelease']);
    Route::post('/admin-dashboard/createpressrelease',[AdminController::class,'createPressrelease']);
    Route::get('/admin-dashboard/pressreleaselist',[AdminController::class,'getPressrelease']);
    Route::get('/admin-dashboard/pressrelease/{id}',[AdminController::class,'editPress']);
    Route::post('/admin-dashboard/updatepressrelease',[AdminController::class,'updatePress']);
    Route::post('/admin-dashboard/deletepressrelease',[AdminController::class,'deletePress']);
    Route::get('/admin-dashboard/servicecategory',[AdminController::class,'serviceCategory']);
    Route::post('/admin-dashboard/createservicecategory',[AdminController::class,'createServiceCategory']);
    Route::post('/admin-dashboard/deleteservicecategory',[AdminController::class,'deleteServiceCategory']);
    Route::get('/admin-dashboard/otherservices',[AdminController::class,'otherservices']);
    Route::post('/admin-dashboard/createservices',[AdminController::class,'createservices']);
    Route::get('/admin-dashboard/otherserviceslist',[AdminController::class,'getOtherServices']);
    Route::get('/admin-dashboard/otherservices/{id}',[AdminController::class,'editServices']);
    Route::post('/admin-dashboard/updateservices',[AdminController::class,'updateServices']);
    Route::post('/admin-dashboard/deleteservices',[AdminController::class,'deleteServices']);
    Route::get('/admin-dashboard/sitemeta',[AdminController::class,'siteMeta']);
    Route::post('/admin-dashboard/createsite',[AdminController::class,'createSiteMeta']);
    Route::post('/admin-dashboard/popular',[AdminController::class,'updateMostpopular']);
});

Route::group(['middleware'=>['publication']],function(){
    Route::get('/publications',[PublicationController::class,'allpublications']);
    Route::post('/publicationname',[PublicationController::class,'publicationName']);
    Route::get('/download',[PublicationController::class,'download']);
    Route::post('/allpublications',[PublicationController::class,'reset']);
});