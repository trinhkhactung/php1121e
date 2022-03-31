<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::paginate(5);
        return view('pages.student', [
            'students' => $students
        ]);
    }

    public function getDescription(Request $request) {
        $data = $request->all();
        return Student::find($data['id'])->descriptions;
//        return response()->json([
//            "data" => $description
//        ]);
    }
}
