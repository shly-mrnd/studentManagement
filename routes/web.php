<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ClerkController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Student\OverviewController;
use App\Http\Controllers\Student\StudentProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Clerk\ClerkStudentController;
use App\Http\Controllers\Clerk\ClerkProfileController;
use App\Http\Controllers\Clerk\HomeController;

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
})->name('login');

Route::prefix('/auth')
    ->name('auth.')
    ->group(function() {
        Route::get('/register', [RegisterController::class, 'index'])->name('register');
    });


// Administrator
Route::prefix('/admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('clerk', ClerkController::class);
        Route::resource('students', StudentController::class);
        Route::resource('profile', AdminProfileController::class);
    });


//Students
Route::prefix('/student')
    ->name('student.')
    ->group(function() {
        Route::get('/overview', [OverviewController::class, 'index'])->name('overview');
        Route::resource('profile', StudentProfileController::class);
    });

//Clerk
Route::prefix('/clerk')
    ->name('clerk.')
    ->group(function() {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/profile', [ClerkProfileController::class, 'index'])->name('profile');
        Route::resource('students', ClerkStudentController::class);
    });

