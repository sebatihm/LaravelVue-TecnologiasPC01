<?php

use App\Http\Controllers\GroupController;
use App\Models\EducationalExperience;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/educational-experience/{educationalExperience}/groups', function (Request $request, $educationalExperience) {
        return Inertia::render('Groups/GroupsIndex', [
            'educationalExperience' => EducationalExperience::find($educationalExperience),
        ]);
    })->name('groups.list');

    Route::get('/educational-experience/create', function () {
        return Inertia::render('EducationalExperience/EducationalExperienceCreate');
    })->name('educational-experience.create');

    Route::get('/educational-experiences/{educationalExperience}/edit', function ($educationalExperience) {
        $educationalExperience = EducationalExperience::findOrFail($educationalExperience);
        return Inertia::render('EducationalExperience/EducationalExperienceEdit', ['educationalExperience' => $educationalExperience]);
    })->name('educational-experience.edit');

    Route::get('/educational-experiences/{educationalExperience}/delete', function () {
        return Inertia::render('EducationalExperience/EducationalExperienceDelete');
    })->name('educational-experience.delete');

    Route::get('/group/{group}', [GroupController::class, 'show'])->name('groups.sho');

    Route::get('/educational-experiences/{educational_experience}/groups/create', function ($educationalExperience) {
        $educationalExperience = EducationalExperience::findOrFail($educationalExperience);
        return Inertia::render('Groups/GroupCreate', ['educational_experience' => $educationalExperience]);
    })->name('group.create');

});
    Route::get('/home', function () {
        return Inertia::render('Home/Home');
    })->name('home');
