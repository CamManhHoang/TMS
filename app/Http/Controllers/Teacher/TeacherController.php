<?php

namespace App\Http\Controllers\Teacher;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $stt = 1;
        $topics = Auth::user()->teacher->topics;

        return view('teacher.research-topics', compact('topics', 'stt'));
    }

    public function show()
    {
        $teacher = Auth::user()->teacher;

        return view('teacher.teacher-info', compact('teacher'));
    }
}
