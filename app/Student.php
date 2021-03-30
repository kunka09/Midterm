<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['student_id', 'fname', 'lname', 'address','course'];

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function ratings() {
        return $this->hasMany('App\Rating');
    }
}