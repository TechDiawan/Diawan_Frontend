<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/auth/foorgotpass', 'PersonaAuthController@forgotpass')->name('persona.auth.forgotpass');
});
