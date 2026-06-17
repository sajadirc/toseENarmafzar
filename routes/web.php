<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TagsController;
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
    Route::prefix('login')->middleware('guest')->group(function(){
        Route::get('',[AuthController::class,'login_index'])->name('login.index');

        Route::post('',[AuthController::class,'login'])->name('login.store');
    });

    #Register Routes
    Route::prefix('register')->middleware('guest')->group(function(){

        #Register Page Here
        Route::get('',[AuthController::class,'register_index'])->name('register.index');

        Route::post('',[AuthController::class, 'register'])->name('register.store');
    });

    #logOut Route
    Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
});


#Panel Routes
Route::prefix('panel')->middleware('auth')->group(function(){
    Route::get('',[AdminPanelController::class,'index'])->name('panel.index');

    Route::prefix('users')->group(function(){
        #users list ROute
        Route::get('',[UsersController::class,'index'])->name('panel.users.index');

        #user Delete Route
        Route::delete('{user_id}/delete',[UsersController::class,'destroy'])->name('panel.users.destroy');

        #user Add Routes
        Route::prefix('add')->group(function(){
            Route::get('',[UsersController::class,'add'])->name('panel.users.add');
            Route::post('',[UsersController::class, 'store'])->name('panel.users.store');
        });

        #user Edit Routes
        Route::prefix('{user_id}/edit')->group(function(){
            Route::get('',[UsersController::class,'edit'])->name('panel.users.edit');
            Route::put('',[UsersController::class,'update'])->name('panel.users.update');
        });
    });


    #tags RoUtes
    Route::prefix('tags')->group(function(){
        Route::get('',[TagsController::class,'index'])->name('panel.tags.index');
        Route::post('',[TagsController::class,'store'])->name('panel.tags.store');
        Route::delete('{tag_id}/destroy',[TagsController::class,'destroy'])->name('panel.tags.destroy');

        Route::get('{tag_id}/edit',[TagsController::class,'edit'])->name('panel.tags.edit');
        Route::put('{tag_id}/edit',[TagsController::class,'update'])->name('panel.tags.update');
    });

    #Rss RouTes
    Route::prefix('news')->group(function(){
        Route::get('create',[NewsController::class,'create'])->name('panel.news.create');
        Route::post('create',[NewsController::class,'store'])->name('panel.news.store');

        Route::get('index',[NewsController::class, 'index'])->name('panel.news.index');
    });
});
