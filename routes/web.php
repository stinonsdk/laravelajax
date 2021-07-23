<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacts', function () {
    return view('allcontact');
});

// this is how you create route in the previous version of laravel
// Route::resource('contact',"ContactController");

// this is how you create route in version 8 and above

// Route::resource('contact',ContactController::class);
Route::get('/all/contact', [ContactController::class, 'getAllcontact'])->name('contacts.list');