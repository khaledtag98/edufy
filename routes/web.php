<?php

use App\Http\Controllers\InstructorCheckController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PagesRouterController;

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

Route::get('/', [PagesRouterController::class, 'home'])->name('home');
Route::get('/player', [PagesRouterController::class, 'player'])->name('player');
Route::get('/courses', [PagesRouterController::class, 'courses'])->name('courses');
Route::get('/teach', [PagesRouterController::class, 'teach'])->name('teach');
Route::get('/instructor-registration', [PagesRouterController::class, 'instructorregistration'])->name('instructorregistration');
Route::get('/update-instructor', [InstructorCheckController::class, 'update'])->name('update-instructor');
Route::middleware(['auth:sanctum', 'verified'])->get('/tutor-dashboard', [InstructorCheckController::class, 'index'])->name('tutor-dashboard');
Route::middleware(['auth:sanctum', 'verified'])->post('/create-course', [InstructorCheckController::class, 'createcourse'])->name('create-course');
Route::middleware(['auth:sanctum', 'verified'])->post('/add-section', [InstructorCheckController::class, 'createSection'])->name('createSection');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('UserDasboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->get('/instructor-registration', function () {
    return Inertia::render('InstructorRegistration');
})->name('instructor-registration');

Route::middleware(['auth:sanctum', 'verified'])->get('/create', function () {
    return Inertia::render('CreateCourse');
})->name('create');
Route::middleware(['auth:sanctum', 'verified'])->get('/edit-course/{id}', function ($id) {
    return Inertia::render('EditCourse', ['course_id'=>$id]);
})->name('edit-course');

