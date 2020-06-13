<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeptController extends Controller
{
    public function create(Request $req){
        DB::table('departments')->insert(
            [
                'departmentId'=>$req->dept_id,
                'departmentName' => $req->dept_name,
                'hod' =>'null'
            ]
        );
        return redirect('home');
    }
}
