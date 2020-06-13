<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'departmentId';

    public function semester(){
        return $this->hasMany('App\Semester','departmentId','departmentId');
    }
}
