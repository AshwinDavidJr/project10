<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Department;
use App\Semester;

class SemController extends Controller
{
    public function create(){

        $query = DB::table('departments')->select('departmentId','departmentName')->get();
        return view('admin.sem')->with('depts',$query);

    }
    public function insert(Request $req){

        DB::table('semesters')->insert([
            'SemesterId'=>$req->dept.$req->year.$req->sem,
            'departmentId'=> $req->dept,
            'year'=>$req->year,
            'semesterName'=>$req->sem
        ]);
        return redirect('home');
    }
    public function viewsem(Request $req){
        $id = \Crypt::decrypt($req->id);
        $dname=$id;
        //$id= $req->id;
        /*$dnam = DB::table('departments')->where('deptid',$id)->select('deptname')->get();
        $dname=$dnam[0]->deptname;

        $depts= DB::table('semester')->where('dep_id',$id)->get();

        return view('admin.viewsem')->with(compact('depts','dname'));*/
        $sem=Department::find($id);
        
        //print_r($sem->semester->semesterId);
        return view('admin.viewsem')->with(compact('sem'));




    }
    public function viewsub(Request $req){
       //$id= $req->id;
        $id = \Crypt::decrypt($req->id);
      /* $dnam = DB::table('semester')->where('semid',$id)->select('semno')->get();
       $sname=$dnam[0]->semno;
       //print_r($sname);
       $users = DB::table('subjects')->select('subject_code','sem_id','subject_name')->where('sem_id','=',$id)->get();
       return view('admin.viewsub')->with(compact('users','sname'));*/

        
       $subs=Semester::find($id);
       return view('admin.viewsub')->with('subs',$subs);
       





    }

    public function chk(Request $req){
        // $depid=1002;
         $res='';
         $depid=$req->data;
         //$query = DB::table('departments')->select('deptid','deptname')->where('deptid','=',"$depid")->get();
         //dd($query);
 
       //  $query1 = DB::table('semester')->select('semid','semno')->where('dep_id','=',"$depid")->get();
        // dd($query);
        $query1=Department::find($depid)->semester;
         $query=json_decode($query1, true);
         foreach($query as $result){
             $res.='<option value="'.$result['semesterId'].'">'.$result['semesterName'].'</option>';
         }
         return $res;
 
 
 
     }

}
