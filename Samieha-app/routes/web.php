<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/patientTable', function () {
    return view('patientTable');
});

Route::get('/slpTable', function () {
    return view('slpTable');
});

Route::get('/uploadMat', function () {
    return view('uploadMat');
});

Route::get('/new', function () {
    return view('new');
});