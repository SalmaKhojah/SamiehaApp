<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\slpController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\linkPaitent;
use App\Http\Controllers\paitentsList;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\PatientResultController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\slpPaitentController;
use App\Http\Controllers\SlpLinksPaitentController;
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

/*Home Page route*/

// password A!123456x
Auth::routes();


// Admin routes
Route::middleware(['auth','admin'])->group(function () {
 
    // resource ما يضبط باستخدام 
Route::get('/',[AdminHomeController::class, 'index']);

// Admin home page controller
Route::resource('/AdminHome' , AdminHomeController::class);

/*Speeach and Language Pathologist route*/
Route::resource('/slpTable' , slpController::class);

/* patient route*/
Route::resource('/patientTable' , patientController::class);

/* Material route*/
Route::resource('/Material' , MaterialController::class);

/* link paitent route*/
Route::resource('/link' , linkPaitent::class);

/*  paitent list route*/
Route::resource('/paitentsList' , paitentsList::class);

Route::get('/uploadMat', function () {
    return view('uploadMat');
});

Route::get('get-Subcategory', [MaterialController::class, 'getSubcategory'])->name('getSubcategory');


Route::get('/new', function () {
    return view('new');
});

});


   

// SLP routes
Route::middleware(['auth', 'slp'])->group(function () {
    Route::get('/SLP/home', function () {
        return view('SLP.home');
    });

    Route::resource('/session' , sessionController::class);


    Route::resource('/slpPaitentTable' , slpPaitentController::class);

    Route::resource('/slpLinkP' ,  SlpLinksPaitentController::class);
    Route::resource('/result' ,  PatientResultController::class);


// Route::get('/SLPhome', [App\Http\Controllers\slpController::class, 'home']);


});




