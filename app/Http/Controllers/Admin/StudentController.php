<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $stt = 1;
        $students = Student::with('user')->get();

        return view('admin.student.index', compact('students', 'stt'));
    }
}
