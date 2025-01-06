<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Persona\MyProfileController;
use App\Http\Controllers\Persona\PersonaAuthController;
use App\Http\Controllers\Persona\CompetencyController;
use App\Http\Controllers\Persona\ECardController;
use App\Http\Controllers\Persona\BillingController;
use App\Http\Controllers\Persona\ProjectsController;
use App\Http\Controllers\Persona\AccountController;
use App\Http\Controllers\Persona\PersonaSidebarController;
use App\Http\Controllers\TestLab\TesLabSidebarController;
use App\Http\Controllers\TestLab\TestLabDashboardController;
use App\Http\Controllers\TestLab\TestLabSkillClaimController;
use App\Http\Controllers\Admin\ManageSkillTypeController;
use App\Http\Controllers\Admin\ManageSkillController;
use App\Http\Controllers\Persona\SkillClaimController;

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
    
    Route::get('/sidebar', [PersonaSidebarController::class, 'getMenuItems'])->name('persona.sidebar');
    
    // Route for My Profile page
    Route::get('/myprofile', [MyProfileController::class, 'index'])->name('persona.myprofile');
    Route::post('/myprofile', [MyProfileController::class, 'update'])->name('persona.update-profile');

    // Route for Competency page
    Route::get('/competency', [CompetencyController::class, 'index'])->name('persona.competency');

    // Route for E-Card page
    Route::get('/e-card', [ECardController::class, 'index'])->name('persona.e-card');

    // Route for Billing page
    Route::get('/billing', [BillingController::class, 'index'])->name('persona.billing');

    // Route for My Projects page
    Route::get('/projects', [ProjectsController::class, 'index'])->name('persona.projects');

    // Route for Account page
    Route::get('/account', [AccountController::class, 'index'])->name('persona.account');

    // Route for Skill Claim page
    Route::get('/skillclaim', [SkillClaimController::class, 'index'])->name('persona.skillclaim');
});

// Routes for TestLab
Route::prefix('testlab')->group(function () {
    Route::get('/dashboard', [TestlabDashboardController::class, 'index'])->name('testlab.dashboard');
    Route::get('/sidebar', [TestlabSidebarController::class, 'getMenuItems'])->name('testlab.sidebar');
    Route::get('/myskills', [TestLabSkillClaimController::class, 'mySkills'])->name('testlab.myskills');

    // Routes for Admin under TestLab
    Route::prefix('admin')->group(function () {
        Route::get('/manage-skill-type', [ManageSkillTypeController::class, 'index'])->name('admin.manage-skill-type');
        Route::get('/manage-skill', [ManageSkillController::class, 'index'])->name('admin.manage-skill');
        Route::get('/question-bank', [TestlabSidebarController::class, 'questionBank'])->name('admin.question-bank');
        Route::get('/participants', [TestlabSidebarController::class, 'participants'])->name('admin.participants');
        Route::get('/skillheatmap', [TestlabSidebarController::class, 'skillheatmap'])->name('admin.skillheatmap');
        // Add more admin routes here
    });
});

// Routes for Talents
Route::prefix('talent')->group(function () {
    Route::get('/dashboard', [TalentDashboardController::class, 'index'])->name('talent.dashboard');
});

Route::get('/notifications/{type?}', [NotificationController::class, 'index']);

Route::get('/appssample', [SampleAppsController::class, 'index'])->name('apps.index');