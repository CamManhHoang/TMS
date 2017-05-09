<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Council;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefenseController extends Controller
{
    public function index()
    {
        $stt = 1;
        $students = Student::has('topic')->get();

        return view('admin.defense.index', compact('students', 'stt'));
    }

    public function get_add_council_student($id)
    {
        $councils_list = Council::pluck('council_name', 'id');
        $student = Student::findOrFail($id);

        return view('admin.defense.add_student_council', compact('student', 'councils_list'));
    }

    public function add_council_student(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->council_id = $request->council_id;
        $student->save();

        Alert::success('Đã hủy bỏ yêu cầu đăng ký đề tài khóa luận của sinh viên',
            'Thành công')->autoclose(2500);
        return redirect('/students-defense');
    }
}
