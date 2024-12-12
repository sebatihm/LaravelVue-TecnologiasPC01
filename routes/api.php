<?php

use App\Http\Controllers\EducationalExperienceController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', UserController::class);
Route::resource('educational-experiences', EducationalExperienceController::class);
Route::resource('educational-experiences.groups', GroupController::class)->shallow();
Route::get('groups/{group}/students', [GroupController::class, 'studentsByGroup'])->name('groups.studentsByGroup')->except('show');
Route::resource('enrollments', EnrollmentController::class);

