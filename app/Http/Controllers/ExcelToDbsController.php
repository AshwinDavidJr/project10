<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\student;
class ExcelToDbsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function importExportView()
    {
       return view('advisor.asv1');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function viewstudent()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function addstudent()
    {
        Excel::import(new UsersImport(request()->get('selection')),request()->file('file'));

        return view('advisor.asv1');
    }
    public function check()
    {

            $selection =('1012020'.request()->get('listsem'));

            $sems = DB::table('students')->where("semesterId","like",$selection)->get();
            if (count($sems)==0)
            {
                return view('advisor.asv',compact('selection'));
            }
           else
           {
            $arr['sems'] = DB::table('students')->where("semesterId","=",$selection)->get();
            return view('advisor.print')->with($arr);
           }


    }
}
