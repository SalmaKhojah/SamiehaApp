<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\slpController;
use App\Http\Controllers\patientController;

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



Route::resource('/slpTable' , slpController::class);


Route::resource('/patientTable' , patientController::class);


Route::get('/uploadMat', function () {
    return view('uploadMat');
});

Route::get('/new', function () {
    return view('new');
});