<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $primaryKey = 'semesterId';
    public $incrementing = false;

    public function department(){
        return $this->belongsTo('App\Department','departmentId','departmentId');
    }
    public function subject(){
        return $this->hasMany('App\Subject','semesterId','semesterId');
    }
    public function student(){
        return $this->hasMany('App\Student','semesterId','semesterId');
    }
}
