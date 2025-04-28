<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () { // Path
    return view('hello'); // Page
});

Route::get('/about', function () { // Path
    return view('about'); // Page
});

Route::get('/contact-us', function () { // Path
    return view('contact'); // Page
});
