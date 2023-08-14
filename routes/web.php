<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AllauthController;
use App\Http\Controllers\Frontend\University\DashboardController;
use App\Http\Controllers\Frontend\Trainee\DashboardController as TraineeDashboardController;
use App\Http\Controllers\Frontend\Hospital\DashboardController as HospitalDashboardController;
use App\Http\Controllers\SuperAdmin\SuperAdminDashboardController;
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
    return view('welcome');
});

//all login page
Route::get('/signin', [AllauthController::class, 'signinForm'])->name('signpage')->middleware('is_signin');
Route::post('/signin', [AllauthController::class, 'singinSubmit'])->name('signin.submit')->middleware('is_signin');

Route::get('/sendmail', [AllauthController::class, 'sendmail'])->name('sendmail');
Route::get('/signup', [AllauthController::class, 'signupForm'])->name('signuppage')->middleware('is_signin');
Route::post('/signup', [AllauthController::class, 'signupSubmit'])->name('signup.submit')->middleware('is_signin');
Route::get('/logout', [AllauthController::class, 'logout'])->name('logoutall');

Route::namespace('University')->prefix("university")->group(function () {
    Route::middleware("is_university")->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('university.dashboard');
    });
});

Route::namespace('Trainee')->prefix("trainee")->group(function () {
    Route::middleware("is_trainee")->group(function () {
        Route::get('/dashboard', [TraineeDashboardController::class, 'dashboard'])->name('trainee.dashboard');
    });
});

Route::namespace('Hospital')->prefix("hospital")->group(function () {
    Route::middleware("is_hospital")->group(function () {
        Route::get('/dashboard', [HospitalDashboardController::class, 'dashboard'])->name('hospital.dashboard');
    });
});

Route::group(['prefix' => 'superadmin', "middleware" => ['is_super_admin']], function () {
    Route::get('dashboard', [SuperAdminDashboardController::class, 'dashboard'])->name('super.admin.dashboard');
});
