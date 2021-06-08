<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    public function create(Request $request){
         Course::create([
            'user_id' => User::factory(),
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
