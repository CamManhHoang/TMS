<?php

namespace App\Http\Controllers\Teacher;

use App\Department;
use App\Teacher;
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

    public function edit()
    {
        $departments_list = Department::pluck('name_vn', 'id');

        $teacher = Auth::user()->teacher;

        return view('teacher.edit-profile', compact('teacher', 'departments_list'));
    }

    public function update(Request $request)
    {
        $id = Auth::user()->teacher->id;
        $teacher = Teacher::findOrFail($id);
        $teacher->full_name = $request->name;
        $teacher->department_id = $request->department_id;
        $teacher->position = $request->position;
        $teacher->research = $request->research;

        $teacher->save();

        \Alert::success('Cập nhật thông tin cá nhân thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
