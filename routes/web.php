<?php

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('UserDasboard');
})->name('dashboard');
