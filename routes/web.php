<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/create-list'); // This redirect user to send parameter;

Route::get('/create-list', function () { // Path
    return view('create'); // Page
})->name('create');

Route::get('/delete-list', function () { // Path
    return view('delete'); // Page
})->name('delete');

Route::get('/about', function () { // Path
    return view('about'); // Page
})->name('about');

Route::get('/contact-us', function () { // Path
    return view('contact'); // Page
})->name('contact');

// Route::get('/contact-us', ContactController::index())->name('contact);


Route::prefix('admin')->group(function(){
    // Route::get('/contact-us', function () { // Path
    //     return view('contact'); // Page
    // })->name('contact');

    // Route::get('/about', function () { // Path
    //     return view('about'); // Page
    // })->name('about');
});