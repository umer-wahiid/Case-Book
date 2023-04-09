<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaseregController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\website;

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
//     return view('website/home');
// });


Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/dashboard', function () {
    if(Auth::user()){
    return view('admin/dashboard');
    }
    else{
        return view('website/home');
    }
});


Route::group(['prefix'=>'/'],function(){
    Route::get('/',[website::class,'index']);
    Route::get('search',[website::class,'search']);
    Route::post('findsearch',[website::class,'findsearch']);
    Route::get('detail/{id}',[website::class,'detail']);
    Route::post('update/{id}',[website::class,'update']);
    Route::get('show',[website::class,'show']);
    Route::get('destroy/{id}',[website::class,'destroy']);
});



Route::group(['prefix'=>'admin'],function(){
    
    Route::post('storelogin',[AuthController::class,'storelogin']);
    Route::get('logout',[AuthController::class,'logout']);

    
    //Route::get('/',[adminController::class,'index']);
    
    Route::group(['prefix'=>'lawyers'],function(){
        Route::get('index',[AuthController::class,'index']);
        Route::get('create',[AuthController::class,'create']);
        Route::get('detail/{id}',[AuthController::class,'detail']);
        Route::post('update/{id}',[AuthController::class,'update']);
        Route::post('store',[AuthController::class,'store']);
        Route::get('show',[AuthController::class,'show']);
        Route::get('destroy/{id}',[AuthController::class,'destroy']);
    });
    
    
    Route::group(['prefix'=>'cases'],function(){
        Route::get('index',[CaseregController::class,'index']);
        Route::get('create',[CaseregController::class,'create']);
        Route::post('store',[CaseregController::class,'store']);
        Route::get('show',[CaseregController::class,'show']);
        Route::get('edit/{id}',[CaseregController::class,'edit']);
        Route::post('update/{id}',[CaseregController::class,'update']);
        Route::get('destroy/{id}',[CaseregController::class,'destroy']);
    });


    Route::group(['prefix'=>'detail'],function(){
        Route::get('index/{id}',[DetailController::class,'index']);
        Route::get('create/{id}',[DetailController::class,'create']);
        Route::post('store',[DetailController::class,'store']);
        Route::get('show',[DetailController::class,'show']);
        Route::get('reply/{id}',[DetailController::class,'reply']);
        Route::post('replymail/{id}',[DetailController::class,'replymail']);
        Route::get('destroy/{id}',[DetailController::class,'destroy']);
    });
    

});