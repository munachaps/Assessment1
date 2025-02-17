<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PageManagerController;
use App\Http\Controllers\AuthController;



Route::get('/',[LandingPageController::class,'siteHome']);
Route::get('/home/banner/{id}',[LandingPageController::class,'viewHomeImage'])->name('homedetails');

/* Auth routes */
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('handlelogin',[AuthController::class,'handleLogin'])->name('handlelogin');

Route::middleware(["auth:admin"])->group(function () {
    Route::get('admin/home',[AdminController::class,'home'])->name('admin/home');
    Route::get('admin/addpost',[PageManagerController::class,'addHomePost'])->name('admin/addpost');
    Route::post('admin/storebanner',[PageManagerController::class,'createHomePost'])->name('admin/storebanner');
    Route::get('admin/addstat',[PageManagerController::class,'addStat'])->name('admin/addstat');
    Route::post('admin/storestat',[PageManagerController::class,'storeStat'])->name('admin/storestat');
    Route::get('admin/addabout',[PageManagerController::class,'addAbout'])->name('admin/addabout');
    Route::post('admin/storeabout',[PageManagerController::class,'storeAbout'])->name('admin/storeabout');
    Route::get('admin/addfeature',[PageManagerController::class,'addFeature'])->name('admin/addfeature');
    Route::post('admin/storefeature',[PageManagerController::class,'storeFeature'])->name('admin/storefeature');
    Route::get('admin/addcalltoaction',[PageManagerController::class,'addCall'])->name('admin/addcalltoaction');
    Route::post('admin/storecall',[PageManagerController::class,'storeCall'])->name('admin/storecall');
    Route::get('admin/addtestimonial',[PageManagerController::class,'addTestimonial'])->name('admin/addtestimonial');
    Route::post('admin/storetestimonial',[PageManagerController::class,'storeTestimonial'])->name('admin/storetestimonial');
    Route::get('admin/addmenu',[PageManagerController::class,'addMenu'])->name('admin/addmenu');
    Route::post('admin/storemenu',[PageManagerController::class,'storeMenu'])->name('admin/storemenu');
    Route::get('admin/addworks',[PageManagerController::class,'addWorks'])->name('admin/addworks');
    Route::post('admin/storworks',[PageManagerController::class,'storeWorks'])->name('admin/storeworks');
    Route::get('admin/addservice',[PageManagerController::class,'addService'])->name('admin/addservice');
    Route::post('admin/storeservice',[PageManagerController::class,'storeService'])->name('admin/storeservice');
    Route::get('admin/addpricing',[PageManagerController::class,'addPricing'])->name('admin/addpricing');
    Route::post('admin/storepricing',[PageManagerController::class,'storePricing'])->name('admin/storepricing');
    Route::get('admin/addfooter',[PageManagerController::class,'addFooter'])->name('admin/addfooter');
    Route::post('admin/storefooter',[PageManagerController::class,'storeFooter'])->name('admin/storefooter');
    Route::get('admin/addcontact',[PageManagerController::class,'addContact'])->name('admin/addcontact');
    Route::post('admin/storecontact',[PageManagerController::class,'storeContact'])->name('admin/storecontact');
    Route::get('admin.logout', [AdminController::class, 'logout'])->name('admin/logout');
});
