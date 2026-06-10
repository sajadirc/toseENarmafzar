<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // echo 'نسخه اولیه سایت خبری';
    return view('home.home');
    // return view('home');
})->name('home');


#Auth Routes
Route::prefix('auth')->group(function(){

    #Login Routes
    Route::prefix('login')->group(function(){
        Route::get('',[AuthController::class,'login_index'])->name('login.index');

        Route::post('',[AuthController::class,'login'])->name('login.store');
    });

    #Register Routes
    Route::prefix('register')->group(function(){

        #Register Page Here
        Route::get('',[AuthController::class,'register_index'])->name('register.index');

        Route::post('',[AuthController::class, 'register'])->name('register.store');
    });

    #logOut Route
    Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout');
});


#Panel Routes
Route::prefix('panel')->group(function(){
    Route::get('',[AdminPanelController::class,'index'])->name('panel.index');

    Route::prefix('users')->group(function(){
        Route::get('',[UsersController::class,'index'])->name('panel.users.index');
    });
});
