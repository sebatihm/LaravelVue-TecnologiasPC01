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
Route::resource('educational-experience', EducationalExperienceController::class);
Route::resource('groups', GroupController::class);
Route::resource('enrollments', EnrollmentController::class);

Route::get('users-students', [UserController::class, 'getStudents'])->name('users.students');
Route::get('users-teachers', [UserController::class, 'getTeachers'])->name('users.teachers');
Route::get('users-students-group', [UserController::class, 'getStudentsByGroup'])->name('users.studentsByGroup');
Route::get('groups-detailed/{group_id}', [GroupController::class, 'getGroupDetailedInfo'])->name('group.detailed');