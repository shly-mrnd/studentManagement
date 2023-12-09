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
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use GuzzleHttp\Middleware;

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
})->middleware('guest')->name('welcome');

// Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::prefix('/auth')
    ->name('auth.')
    ->middleware ('guest')
    ->group(function() {
        Route::get('/register', [RegisterController::class, 'create'])->name('register');
        Route::post('/register', [RegisterController::class, 'store']);
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    });

    Route::prefix('/auth')
    ->name('auth.')
    ->middleware ('auth')
    ->group(function() {
        Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });

    // Route::middleware('auth')->group(function() {
    //     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    // });


// // Administrator
// Route::prefix('/admin')
//     ->name('admin.')
//     ->middleware('check_admin', 'role:administrator')
//     ->group(function () {
//         Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//         Route::resource('clerk', ClerkController::class);
//         Route::resource('students', StudentController::class);
//         Route::resource('profile', AdminProfileController::class);
//     });


// //Students
// Route::prefix('/student')
//     ->name('student.')
//     ->middleware('check_student', 'role:student')
//     ->group(function() {
//         Route::resource('profile', StudentProfileController::class);
//     });

// //Clerk
// Route::prefix('/clerk')
//     ->name('clerk.')
//     ->group(function() {
//         Route::get('/profile', [ClerkProfileController::class, 'index'])->name('profile');
//         Route::resource('students', ClerkStudentController::class);
//     });

    Route::middleware('auth', 'verified')->group(function () {
        Route::get('/main-dashboard', function () {
            return view('main-dashboard');
        })->name('main-dashboard');

      // Administrator
        Route::prefix('/admin')
            ->name('admin.')
            ->middleware('check_admin', 'role:administrator')
            ->group(function () {
                Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

                Route::resource('/clerk', ClerkController::class);
                Route::resource('/students', StudentController::class);
                Route::resource('/profile', AdminProfileController::class);
            });

        //Students
        Route::prefix('/student')
            ->name('student.')
            ->group(function() {
                Route::resource('/profile', StudentProfileController::class);
            });

        //Clerk
        Route::prefix('/clerk')
            ->name('clerk.')
            ->group(function() {
                Route::get('/profile', [ClerkProfileController::class, 'index'])->name('profile');
                Route::resource('/students', ClerkStudentController::class);
            });

    });

