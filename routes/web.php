<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Main\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordConfirmationController;
use App\Http\Controllers\Auth\EmailVerificationPromtController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

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
    return redirect(app()->getLocale());
});

Route::group(['prefix' => '{locale}','where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function () {

    // routes Main
    Route::get('/', [MainController::class, 'index'])->name('main.index');

    Route::middleware('guest')->group(function () {
        // register
        Route::get('/register', [RegisterController::class, 'create'])->name('register');
        Route::post('/register', [RegisterController::class, 'store']);
        // login
        Route::get('/login', [LoginController::class, 'create'])->name('login');
        Route::post('/login', [LoginController::class, 'store']);
        // forgot password
        Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');
        // reset password
        Route::get('/reset-password', [ResetPasswordController::class, 'create'])->name('password.reset');
        Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');
    });

    // auth routes
    Route::middleware('auth')->group(function () {
        // logout
        Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
        //profile
        Route::get('/profile', [ProfileController::class, 'index'])->middleware(['verified', 'password.confirm'])->name('profile');
        // confirm-password
        Route::get('/confirm-password', [PasswordConfirmationController::class, 'show'])->name('password.confirm');
        Route::post('/confirm-password', [PasswordConfirmationController::class, 'store']);

        // email-verify
        Route::get('email/verify/', [EmailVerificationPromtController::class, '__invoke'])->name('verification.notice');
        Route::get('email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware('signed')->name('verification.verify');
        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, '__invoke'])->name('verification.send');

        // admin
        Route::prefix('admin')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->middleware('verified')->name('admin.index');
            Route::controller(RoleController::class)->group(function(){
                Route::get('role', 'index')->name('admin.role.index');
                Route::get('role/create', 'create')->name('admin.role.create');
                Route::post('role', 'store')->name('admin.role.store');
                Route::get('role/{role}/edit', 'edit')->name('admin.role.edit');
                Route::patch('role/{role}', 'update')->name('admin.role.update');
                Route::delete('role/{role}', 'destroy')->name('admin.role.delete');
            });
            Route::controller(UserController::class)->group(function(){
                Route::get('user', 'index')->name('admin.user.index');
                Route::get('user/{user}/edit', 'edit')->name('admin.user.edit');
                Route::patch('user/{user}', 'update')->name('admin.user.update');
                Route::delete('user/{user}', 'destroy')->name('admin.user.delete');
            });
        });
    });
});
