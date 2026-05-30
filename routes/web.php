<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // echo 'نسخه اولیه سایت خبری';
    return view('home.home')->name('home');
    // return view('home');
});

#Auth Routes
Route::prefix('auth')->group(function(){

    #Login Routes
    Route::prefix('login')->group(function(){
        Route::get('',[AuthController::class,'login_index'])->name('login.index');

        Route::post('',[AuthController::class,'login'])->name('login.store');
    });
});
