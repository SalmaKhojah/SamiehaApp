<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\slpController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\linkPaitent;
use App\Http\Controllers\paitentsList;

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
  
    Route::get('/', function () {
        return view('welcome');
    });

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





Route::get('/new', function () {
    return view('new');
});

});


   

// SLP routes
Route::middleware(['auth', 'slp'])->group(function () {
    Route::get('/SLP/home', function () {
        return view('SLP.home');
    });

// Route::get('/SLPhome', [App\Http\Controllers\slpController::class, 'home']);


});




