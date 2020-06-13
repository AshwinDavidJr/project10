<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Department;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function table()
    {
        //$depts= DB::table('departments')->get();
       // return view('admin.viewdept')->with('depts',$depts);
       $depts=Department::all();
       return view('admin.viewdept')->with('depts',$depts);
    }
    public function dept()
    {
        return view('admin.dept');
    }
}

