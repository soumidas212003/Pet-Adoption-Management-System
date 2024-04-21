<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Pet_Donors\DonorController;
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

Route::get('/home/login-type', function () {
    return view('Select-Login');
})->name('select-login');



#Pet Donors

Route::get('/home/donor-signup', function () {
    return view('Pet-Donors.Signup');
})->name('donor-signup');

Route::get('/donor-dashboard', function () {
    return view('Pet-Donors.Dashboard');
})->name('donor-dashboard');


Route::group(['prefix' => 'donor'], function(){

    #Guest Routes
    Route::group(['middleware' => 'donor.guest'], function(){
        Route::get('/home/donor-login',[DonorController::class,'index'])->name('donor-login');
        Route::post('/donor-reg',[DonorController::class,'registerdonor'])->name('donor.register');
        Route::post('/authenticate',[DonorController::class,'donorauthenticate'])->name('donor.authenticate');
        Route::get('/otp-validate',[DonorController::class,'validateOTP'])->name('otp-validate');
        Route::post('/otp-verify',[DonorController::class,'verifyOTP'])->name('otp-verify');
    });

    #Auth Routes
    Route::group(['middleware' => 'donor.auth'], function(){
        Route::get('/dashboard',[DonorController::class,'dashboard'])->name('donor-dashboard');
        Route::get('/dashboard/my-pets',[DonorController::class,'mypets'])->name('donor-pets');
        Route::get('/dashboard/add-new-pet',[DonorController::class,'newpet'])->name('donor-new-pet');
        Route::get('/logout',[DonorController::class,'Logout'])->name('donor-logout');
    });
});


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
