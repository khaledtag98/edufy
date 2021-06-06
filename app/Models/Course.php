<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function sections(){
        return $this->hasMany('App\Models\Section');
    }
    public function lectures(){
        return $this->hasMany('App\Models\Lecture');
    }
}
