<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Persona\MyProfileController;
use App\Http\Controllers\Persona\PersonaAuthController;
use App\Http\Controllers\Persona\CompetencyController;
use App\Http\Controllers\Persona\ECardController;
use App\Http\Controllers\Persona\BillingController;
use App\Http\Controllers\Persona\ProjectsController;

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

    // Route for Competency page
    Route::get('/competency', [CompetencyController::class, 'index'])->name('persona.competency');

    // Route for E-Card page
    Route::get('/e-card', [ECardController::class, 'index'])->name('persona.e-card');

    // Route for Billing page
    Route::get('/billing', [BillingController::class, 'index'])->name('persona.billing');

    // Route for My Projects page
    Route::get('/projects', [ProjectsController::class, 'index'])->name('persona.projects');
});

Route::get('/notifications/{type?}', [NotificationController::class, 'index']);