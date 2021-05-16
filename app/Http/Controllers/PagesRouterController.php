<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class PagesRouterController extends Controller
{
    public function home()
    {
        return Inertia::render('Landing');
        // return Inertia::render('Landing', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        // ]);
    }
    public function player()
    {
        return Inertia::render('Player');
    }
    public function courses()
    {
        return Inertia::render('Courses');
    }
    public function teach()
    {
        return Inertia::render('Teach');
    }
}
