<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // echo 'نسخه اولیه سایت خبری';
    return view('home.home');
    // return view('home');
});
