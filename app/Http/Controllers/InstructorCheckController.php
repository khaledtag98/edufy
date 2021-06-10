<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Controllers\Redirect;
use App\Models\Course;
use App\Models\Section;
use App\Models\User;

class InstructorCheckController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->instructor == 1) {
            return Inertia::render("TutorDashboard", ['user' => $user->load('courses')]);
        } else {
            return dd($user);
        }
    }
    public function update()
    {

        if (Auth::user()) {
            $user = Auth::user();
            $user->instructor = 1;
            $user->save();
            // dd($user->load('courses'));
            return Inertia::location("/tutor-dashboard");
        }
    }
    public function createcourse(Request $request)
    {
        Course::create([
            'user_id' => Auth::user()->id,
            'title' =>  $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return Inertia::render("TutorDashboard");
    }
    public function createSection(Request $request)
    {
        Section::create([
            'course_id' => $request->course_id,
            'title' =>  $request->title,
            'clicked' => $request->clicked,
            'addlect' => $request->addlect,
        ]);
        $url = (string)$request->course_id;

        return Inertia::location($url);
    }
}
