<?php

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('auth.login', ['type_menu' => '']);
});


Route::middleware(['auth'])->group(function () {

    Route::get('home', function () {
        return view('pages.blank-page', ['type_menu' => '']);
    })->name('home');
});



// // Blank Page
// Route::get('/', function () {
//     return view('pages.blank-page', ['type_menu' => '']);
// });
