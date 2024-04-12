<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\HomeController;

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




Route::group(['prefix' => 'admin'], function(){

    #Guest Routes
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
    });

    #Auth Routes
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[HomeController::class,'index'])->name('admin.home');
        Route::get('/pet-donors',[HomeController::class,'PetDonors'])->name('admin.donors');
        Route::get('/profile', function () {
            return view('Admin.Profile');
        })->name('admin.profile');
        Route::get('/dashboard/logout',[HomeController::class,'Logout'])->name('admin.logout');
    });
});
