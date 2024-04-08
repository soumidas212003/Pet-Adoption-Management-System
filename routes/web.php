<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('HomePage');

Route::get('/home/about', function () {
    return view('About');
})->name('AboutUsPage');

Route::get('/avliable_dogs_cats', function () {
    return view('Avliable_Pets');
})->name('Avliable_Dogs_Cats');

Route::get('/avliable_dogs_cats/detail', function () {
    return view('Pet_Details');
})->name('pet_details');

Route::get('/avliable_dogs_cats/detail/questions', function () {
    return view('Questions');
})->name('questions');
