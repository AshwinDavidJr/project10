<?php

namespace App\Imports;

use App\student;
use App\user;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $select=null;
    public function __construct($selection)
    {
        $this->select=$selection;

    }
    public function model(array $row)
    {
        $i=0;
        $pswd=('stpswd'.++$i);


        DB::table('students')->insert(
            [
            'studentId'     => $row[0],
            'name'     => $row[1],
            'semesterId'      => $this->select,

            ]
        );
        DB::table('users')->insert(
            [
                'name' => $row[1],
                'username' =>$row[0],
                'user_type' => 'student',
                'password' => $pswd,
                'departmentId' => 'null',

            ]
        );

    }
}
