<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        /*
         * php artisan migrate : Đồng bộ những file migration chưa dc run
         * php artisan migrate:rollback
         * php artisan make:migration create_students_table --create=students : tao table
         * */





        // $students = DB::select('select * from students');
        // $users = DB::table('users')->select('name', 'email as user_email')->get();

        // Select
        /*
        $student = DB::table('students')
            ->select('students.name', 'students.phone', 'facultys.title')
            ->join('facultys', 'facultys.id', 'students.faculty_id')
            ->where('students.id', '=', 2)
            ->get();
            dd($student);
            foreach ($students as $student) {
                echo $student->name." ";
            }
        */

        // Insert
        /*
        $insertFaculty = DB::table('facultys')->insert([
            'title' => 'Khoa Du lịch',
            'description' => 'Mo ta khoa'
        ]);
        dd($insertFaculty);
        */

        // Update
        /*
        $updateStudent = DB::table('students')->where('id', 2)
            ->update([
                'name' => 'Tung TK'
            ]);
        dd($updateStudent);
        */


        /** Query ORM **/
        // Select
        // $students = Student::all();
        // $students = Student::select('name', 'phone')->get()->toArray();
        // $students = Student::where('id', 2)->get()->toArray();
        // $students = Student::find(2)->get()->toArray();

//        $students = Student::where('id', 2)
//            ->orWhere('facultys_id', 10)
//            ->get()->toArray();

        //$facultys = Faculty::find(40);
//        dd($facultys->setudent);
//        foreach ($facultys->setudent as $student){
//            echo $student->name." ";
//        }
//
//        $student = Student::find(10);
//        dd($student->faculty->title);

//        Student::where('id', 23)->update([
//            'name' => 'Tung',
//            'phone' => '0989888999'
//        ]);

        Student::where('id', 23)->delete();

        return view('pages.dashboard');
    }
}
