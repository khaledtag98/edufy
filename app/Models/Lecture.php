<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function lectures(){
        return $this->belongsTo('App\Models\Section');
    } 
    public function courses(){
        return $this->belongsTo('App\Models\Course');
    } 
}
