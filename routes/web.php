<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return redirect()->route('login');
// });

Route::get('/', function(){
    return view('index');
});