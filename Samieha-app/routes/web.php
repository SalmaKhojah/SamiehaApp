<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\slpController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/uploadMat', function () {
    return view('uploadMat');
});
Route::get('/new', function () {
    return view('new');
});

});

Route::get('/SLPhome', function () {
    return view('SLP.home');
});
   

// SLP routes
Route::middleware(['auth', 'slp'])->group(function () {


// Route::get('/SLPhome', [App\Http\Controllers\slpController::class, 'home']);


});




