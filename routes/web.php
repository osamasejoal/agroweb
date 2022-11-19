<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

use App\Http\Controllers\{CustomAuthController, ForgotPasswordController, ResetPasswordController, FrontendController, HomeController, ProfileController, UserController};



/*
|--------------------------------------------------------------------------
|                          CUSTOM AUTH CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('home', [CustomAuthController::class, 'home']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('post-login', [CustomAuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('post-registration', [CustomAuthController::class, 'postRegistration'])->name('register.post');
Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout');



/*
|--------------------------------------------------------------------------
|                          FORGOT PASSWORD CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/forgot-password-page', [ForgotPasswordController::class, 'forgotPasswordPage'])->name('forgot.password.page');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
Route::post('/verify/pin', [ForgotPasswordController::class, 'verifyPin'])->name('verify.pin');



/*
|--------------------------------------------------------------------------
|                          RESET PASSWORD CONTROLLER
|--------------------------------------------------------------------------
*/
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('reset.password');



/*
|--------------------------------------------------------------------------
|                          FRONTEND CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'frontpage'])->name('frontpage');



/*
|--------------------------------------------------------------------------
|                          HOME CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');



/*
|--------------------------------------------------------------------------
|                          PROFILE CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/your/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/your/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/your/password/change', [ProfileController::class, 'editPass'])->name('profile.password.change');
Route::post('/your/password/change', [ProfileController::class, 'updatePass'])->name('profile.password.update');




/*
|--------------------------------------------------------------------------
|                          UserController
|--------------------------------------------------------------------------
*/
Route::resource('user', UserController::class);
Route::get('/user/list/{id}', [UserController::class, 'view'])->name('user.view');
// Route::get('/convert-to-json', function () {return App\Models\User::paginate(10);});
Route::get('/user/status/change', [UserController::class, 'userStatus'])->name('user.status');
