<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function courses(){
        return $this->belongsTo('App\Models\Course');
    } 
    public function lectures(){
        return $this->hasMany('App\Models\Course');
    } 
}
