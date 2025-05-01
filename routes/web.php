<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

// Route::redirect('/home', '/create-list'); // This redirect user to send parameter;

// Route::get('/create-list', function () { // Path
//     return view('create'); // Page
// })->name('create');

// Route::get('/delete-list', function () { // Path
//     return view('delete'); // Page
// })->name('delete');

// Route::get('/about', function () { // Path
//     return view('about'); // Page
// })->name('about');

// Route::get('/contact-us', function () { // Path
//     return view('contact'); // Page
// })->name('contact');

// Route::get('/contact-us', ContactController::index())->name('contact);


// Route::prefix('admin')->group(function(){ // user for add group link like Admin;
//     // Route::get('/contact-us', function () { // Path
//     //     return view('contact'); // Page
//     // })->name('contact');

//     // Route::get('/about', function () { // Path
//     //     return view('about'); // Page
//     // })->name('about');
// });

Route::get('/create', [CreateController::class, 'index'])->name('create');
Route::get('/delete', [DeleteController::class, 'index'])->name('delete');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');