<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TokenController;



/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group(['middleware' => 'auth:sanctum'], function () {
 
    Route::get('/user', function (Request $request) {
        // return $request->user();
        return [
        'id' => $request->user()->id,
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'phone' => $request->user()->info->phone,
        'diagnosis'=> $request->user()->info->diagnosis,
        
        'slp_name' => $request->user()->slp()->name,
        'slp_email' => $request->user()->slp()->email,



         ];
    });
    Route::get('/user/posts', function (Request $request) {
        return $request->user()->posts;
    });

    Route::delete('/auth/token', [TokenController::class, 'destroy']);
});

Route::post('/auth/token', [TokenController::class, 'store']);

