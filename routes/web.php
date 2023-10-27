<?php

use App\Http\Controllers\Admin\AdminAboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\TagFilter;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Main\CategoryFilter;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainSingleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Main\ProfileController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Profile\LikedController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Profile\CommentController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\PasswordConfirmationController;
use App\Http\Controllers\Auth\EmailVerificationPromtController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Main\AboutController;
use App\Http\Controllers\Main\ContactController;
use App\Http\Controllers\SearchController;

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

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], function () {

    // routes Main

    Route::get('/', [MainController::class, 'index'])->name('main.index');
    Route::get('/article/{slug}', MainSingleController::class)->name('main.show');
    Route::get('/category/{slug}', [CategoryFilter::class, 'index'])->name('main.category');
    Route::get('/tag/{slug}', [TagFilter::class, 'index'])->name('main.tag');
    Route::get('/search', [SearchController::class, 'search'])->name('main.search');
    Route::get('/about', [AboutController::class, 'index'])->name('main.about');
    Route::get('/contact', [ContactController::class, 'index'])->name('main.contact');

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
        Route::group(['prefix' => 'profile', 'middleware' => ['verified', 'password.confirm']], function () {
            Route::get('/', [ProfileController::class, 'index'])->name('profile');
            Route::get('/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/{user}', [ProfileController::class, 'update'])->name('profile.update');
            // likes
            Route::get('/likes', [LikedController::class, 'index'])->name('profile.likes');
            Route::delete('/likes/{article}', [LikedController::class, 'destroy'])->name('profile.likes.delete');
            // comments
            Route::get('/comments', [CommentController::class, 'index'])->name('profile.comments');
            Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('profile.comments.edit');
            Route::patch('/comments/{comment}', [CommentController::class, 'update'])->name('profile.comments.update');
            Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('profile.comments.delete');
        });
        // confirm-password
        Route::get('/confirm-password', [PasswordConfirmationController::class, 'show'])->name('password.confirm');
        Route::post('/confirm-password', [PasswordConfirmationController::class, 'store']);

        // email-verify
        Route::get('email/verify/', [EmailVerificationPromtController::class, '__invoke'])->name('verification.notice');
        Route::get('email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware('signed')->name('verification.verify');
        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, '__invoke'])->name('verification.send');

        // admin
        Route::group(['prefix' => 'admin', 'middleware' =>['auth', 'verified', 'isAdmin']], function () {
            Route::get('/', [AdminController::class, 'index'])->middleware('verified')->name('admin.index');
            Route::controller(RoleController::class)->group(function () {
                Route::get('role', 'index')->name('admin.role.index');
                Route::get('role/create', 'create')->name('admin.role.create');
                Route::post('role', 'store')->name('admin.role.store');
                Route::get('role/{role}/edit', 'edit')->name('admin.role.edit');
                Route::patch('role/{role}', 'update')->name('admin.role.update');
                Route::delete('role/{role}', 'destroy')->name('admin.role.delete');
            });
            Route::controller(UserController::class)->group(function () {
                Route::get('user', 'index')->name('admin.user.index');
                Route::get('user/{user}/edit', 'edit')->name('admin.user.edit');
                Route::patch('user/{user}', 'update')->name('admin.user.update');
                Route::delete('user/{user}', 'destroy')->name('admin.user.delete');
            });
            Route::controller(CategoryController::class)->group(function () {
                Route::get('category', 'index')->name('admin.category.index');
                Route::get('category/create', 'create')->name('admin.category.create');
                Route::post('category', 'store')->name('admin.category.store');
                Route::get('category/{slug}/edit', 'edit')->name('admin.category.edit');
                Route::patch('category/{slug}', 'update')->name('admin.category.update');
                Route::delete('category/{slug}', 'destroy')->name('admin.category.delete');
            });
            Route::controller(TagController::class)->group(function () {
                Route::get('tag', 'index')->name('admin.tag.index');
                Route::get('tag/create', 'create')->name('admin.tag.create');
                Route::post('tag', 'store')->name('admin.tag.store');
                Route::get('tag/{slug}/edit', 'edit')->name('admin.tag.edit');
                Route::patch('tag/{slug}', 'update')->name('admin.tag.update');
                Route::delete('tag/{slug}', 'destroy')->name('admin.tag.delete');
            });
            Route::controller(ArticleController::class)->group(function () {
                Route::get('article', 'index')->name('admin.article.index');
                Route::get('article/create', 'create')->name('admin.article.create');
                Route::post('article', 'store')->name('admin.article.store');
                Route::get('article/{slug}', 'show')->name('admin.article.show');
                Route::get('article/{slug}/edit', 'edit')->name('admin.article.edit');
                Route::patch('article/{slug}', 'update')->name('admin.article.update');
                Route::delete('article/{slug}', 'destroy')->name('admin.article.delete');
            });
            Route::controller(AdminAboutController::class)->group(function () {
                Route::get('about', 'index')->name('admin.about.index');
                Route::get('about/create', 'create')->name('admin.about.create');
                Route::post('about', 'store')->name('admin.about.store');
                Route::get('about/{about}', 'show')->name('admin.about.show');
                Route::get('about/{about}/edit', 'edit')->name('admin.about.edit');
                Route::patch('about/{about}', 'update')->name('admin.about.update');
                Route::delete('about/{about}', 'destroy')->name('admin.about.delete');
            });

            Route::controller(SocialController::class)->group(function () {
                Route::get('social', 'index')->name('admin.social.index');
                Route::get('social/create', 'create')->name('admin.social.create');
                Route::post('social', 'store')->name('admin.social.store');
                Route::get('social/{social}', 'show')->name('admin.social.show');
                Route::get('social/{social}/edit', 'edit')->name('admin.social.edit');
                Route::patch('social/{social}', 'update')->name('admin.social.update');
                Route::delete('social/{social}', 'destroy')->name('admin.social.delete');
            });
        });
    });
});
