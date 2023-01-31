<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaseregController;

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
        Route::get('detail/{id}',[AuthController::class,'detail']);
        Route::post('store',[AuthController::class,'store']);
        Route::get('show',[AuthController::class,'show']);
        Route::get('reply/{id}',[AuthController::class,'reply']);
        Route::post('replymail/{id}',[AuthController::class,'replymail']);
        Route::get('destroy/{id}',[AuthController::class,'destroy']);
    });


    Route::group(['prefix'=>'cases'],function(){
        Route::get('index',[CaseregController::class,'index']);
        Route::get('create',[CaseregController::class,'create']);
        Route::post('store',[CaseregController::class,'store']);
        Route::get('show',[CaseregController::class,'show']);
        Route::get('reply/{id}',[CaseregController::class,'reply']);
        Route::post('replymail/{id}',[CaseregController::class,'replymail']);
        Route::get('destroy/{id}',[CaseregController::class,'destroy']);
    });
    

});