<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
        $courses = Course::all();
        $instructors = User::all();
        return Inertia::render('Courses', ['instructors' => $instructors->load('courses'),'courses' => $courses]);
    }
    public function show($course_id)
    {
        $course = Course::find($course_id);
        return Inertia::render('Player', ['course' => $course]);
    }
    public function editCourse($course_id)
    {
        $course = Course::find($course_id);
        return Inertia::render('EditCourse', ['course' => $course->load('sections')]);
    }
    
    public function teach()
    {
        return Inertia::render('Teach');
    }
    public function instructorregistration()
    {
        return Inertia::render('InstructorRegistration');
    }
}
