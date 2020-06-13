<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Support\Facades\Session;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    
    public function view(){
        $query = Department::all();
        return view('admin.sub')->with('depts',$query);

    }
    public function submit(Request $req){
        DB::table('subjects')->insert(
            [
                'subjectId' => $req->subcode,
                'semesterId' => $req->semid,
                'subjectName'=>$req->subname
            ]
        );
        return redirect('home');

    } 

    public function det1(Request $req){
       // $GLOBALS['selection']=request()->get('sem');
       // $selection=$GLOBALS['selection'];
       $selection=request()->get('sem');
       Session::put('selection', $selection);
        $stud = DB::table('students')->select('id', 'name')->where("sem","=",$selection)->get();
        if (count($stud)==0)
        {
            return view('staff.semerror');
        }
        else
        {
            $arr['stud'] = DB::table('students')->select('id', 'name')->where("sem","=",$selection)->get();
            return view('staff.details')->with($arr);
        }

    }

    public function det2(Request $req){
        $selection=Session::get('selection');
       //$selection=$GLOBALS['selection'];
        $course = DB::table('subjects')->select('subjectId', 'subjectName')->where("semesterId","=","CS2020S2")->get();
        switch ($req->action) {
            case 'course':
                if (count($course)==0)
                {
                    return view('staff.semerror');
                }
                else
                {
                   // $arr['course'] = DB::table('subjects')->select('subjectId', 'subjectName')->where("semesterId","=",$selection)->get();
                    return view('staff.details2')->with('course',$course);
                }
                break;
            
            case 'student':
                if (count($course)==0)
                {
                    return view('staff.semerror');
                }
                else
                {
                    return view('staff.details');
                }
                break;
        }
        
    }

    public function semlist(){
        $semlist=Department::all();
        return view('staff.staffveiw')->with('semlist',$semlist);
    }

    public function semdetails(Request $req){
        $semId=$req->semid;
        
        $subs=Semester::find($semId);
        
        return view('staff.semdetail')->with('subs',$subs);

    }
    public function chk(Request $req){
        // $depid=1002;
         $res='';
         $depid=$req->data;
        $query1=Department::find($depid)->semester;
         $query=json_decode($query1, true);
         foreach($query as $result){
             $res.='<option value="'.$result['semesterId'].'">'.$result['semesterName'].'</option>';
         }
         return $res;
 
 
 
     }

    

}
