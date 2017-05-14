<?php

namespace App\Http\Controllers\Student;

use App\Student;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function edit()
    {
        $class_list = [
            '1' => 'CA',
            '2' => 'CLC',
            '3' => 'Chuẩn'
        ];
        $student = Auth::user()->student;

        return view('student.edit-info', compact('student', 'class_list'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->student->id;
        $student = Student::findOrFail($id);
        $student->full_name = $request->name;
        $student->class = $request->class_uet;
        $student->save();

        \Alert::success('Cập nhật thông tin cá nhân thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
