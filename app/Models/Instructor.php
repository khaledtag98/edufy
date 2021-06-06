<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
