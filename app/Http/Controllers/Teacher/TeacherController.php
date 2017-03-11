<?php

namespace App\Http\Controllers\Teacher;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function show()
    {
        $teacher = Auth::user()->teacher;

        return view('teacher.teacher-info', compact('teacher'));
    }
}
