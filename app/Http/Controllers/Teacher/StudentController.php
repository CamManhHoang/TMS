<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function students_register()
    {
        $stt = 1;
        $students = \Auth::user()->teacher->students
            ->where('teacher_approve', 0)
            ->where('student_approve', 0);

        return view('teacher.students-register', compact('students', 'stt'));
    }
}
