<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('admin/dashboard');
});

Route::group(['prefix'=>'admin'],function(){
    
    
    //Route::get('/',[adminController::class,'index']);
    
    Route::group(['prefix'=>'lawyers'],function(){
        Route::get('index',[AuthController::class,'index']);
        Route::get('create',[AuthController::class,'create']);
        Route::post('store',[AuthController::class,'store']);
        Route::get('show',[AuthController::class,'show']);
        Route::get('reply/{id}',[AuthController::class,'reply']);
        Route::post('replymail/{id}',[AuthController::class,'replymail']);
        Route::get('destroy/{id}',[AuthController::class,'destroy']);
    });
    

});