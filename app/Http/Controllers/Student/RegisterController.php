<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $stt = 1;
        $student = \Auth::user()->student;

        return view('student.register-status', compact('stt', 'student'));
    }

    public function approve($id)
    {

    }

    public function destroy($id)
    {
        $student = \Auth::user()->student;

        $student->teachers()->detach($id);

        \Alert::success('Hủy bỏ đăng ký giáo viên hướng dẫn thành công.',
            'Thành công')->autoclose(2500);
        return back();
    }
}
