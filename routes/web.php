<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\FrontentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontentController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'admin'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('banner',[BannerController::class,'index'])->name('banner');
    Route::post('banner/post',[BannerController::class,'bannerpost'])->name('banner.post');
    Route::get('banner/soft/{id}',[BannerController::class,'bannersoft']);
    Route::get('banner/restore/{id}',[BannerController::class,'bannerrestore']);
    Route::get('banner/delete/{id}',[BannerController::class,'bannerdelete']);
    Route::get('banner/edit/{id}',[BannerController::class,'banneredit']);
    Route::post('Banner/edit/post',[BannerController::class,'Bannereditpost'])->name('Banner.edit.post');
    Route::get('banner/inactive/{id}',[BannerController::class,'bannerinactive']);
    Route::get('banner/active/{id}',[BannerController::class,'banneractive']);

    // edit profile

    Route::get('edit/admin/profile',[AdminController::class, 'adminprofile'])->name('edit.admin.profile');
    Route::get('profile/delete/{id}',[AdminController::class, 'profiledelete']);
    Route::get('profile/edit/{id}',[AdminController::class, 'profileedit']);
});

Route::group(['prefix'=> 'user','middleware' => ['user','auth'],'namespace'=> 'user'],function(){
	Route::get('dashboard',[UserController::class, 'index'])->name('user.dashboard');
    Route::post('update/Data/profile',[UserController::class, 'updateDataprofile'])->name('update.Data.profile');
    Route::get('image/update',[UserController::class, 'imageupdate'])->name('image.update');
    Route::post('update/image/post',[UserController::class, 'updateimagepost'])->name('update.image.post');
    Route::get('change/passwprd',[UserController::class, 'changepasswprd'])->name('change.passwprd');
    Route::post('update/password/post',[UserController::class, 'updatepasswordpost'])->name('update.password.post');
    

});


