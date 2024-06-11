<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthRedirect;
use App\Http\Middleware\NoCache;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,"index"]);
Route::get('home', [HomeController::class,"index"])->name("home");
// Route::admin disini()
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'loginPost'])->name('login.post');

    // Route::middleware('authredirect', 'nocache')->group(function () {
        Route::resource('dashboard', DashboardController::class)->names(['index' => 'dashboard']);
        Route::resource('user', \App\Http\Controllers\UserController::class);
        Route::resource('profile', \App\Http\Controllers\ProfileController::class);
        Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
        Route::resource('education', \App\Http\Controllers\EducationController::class);
        Route::resource('setting', \App\Http\Controllers\SettingController::class);
        Route::resource('certification', \App\Http\Controllers\CertificationController::class);
        Route::resource('skill', \App\Http\Controllers\SkillController::class);
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // });
});
