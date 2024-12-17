<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Persona\MyProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for Persona
Route::prefix('persona')->namespace('App\Http\Controllers\Persona')->group(function () {
    Route::get('/', 'HomeController@index')->name('persona.home');
    // Add more routes for Persona here
    Route::get('/auth/login', 'PersonaAuthController@login')->name('persona.auth.login');
    Route::get('/auth/register', 'PersonaAuthController@register')->name('persona.auth.register');
    Route::post('/auth/register', 'PersonaAuthController@handleRegister')->name('persona.auth.handleRegister');
    Route::get('/auth/forgotpass', 'PersonaAuthController@forgotpass')->name('persona.auth.forgotpass');
    Route::get('/auth/resetpass', 'PersonaAuthController@resetpass')->name('persona.auth.resetpass');
    Route::post('/auth/resetpass', 'PersonaAuthController@handleResetPassword')->name('persona.auth.handleResetPassword');

    // Route for My Profile page
    Route::get('/myprofile', [MyProfileController::class, 'index'])->name('persona.myprofile');
});

Route::get('/notifications/{type?}', [NotificationController::class, 'index']);