<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class)
    ->middleware('auth:sanctum');

Route::resource('/projects', ProjectController::class)
    ->middleware('auth:sanctum');

Route::resource('/educations', EducationController::class);

Route::resource('/experiences', ExperienceController::class);

Route::resource('/languages', LanguageController::class);

Route::resource('/skills', SkillController::class);
