<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CoursesController extends Controller
{
    //
    public function create(Request $request){
         Course::create([
            'user_id' => Auth::user()->id,
            'title' =>  $request->course_title,
            'category' => $request->category,
            'description' =>$request->description,
            'price' => $request->price,
       ]);
       return Inertia::render("TutorDashboard");
    }
    public function update(){

    }

    
}
