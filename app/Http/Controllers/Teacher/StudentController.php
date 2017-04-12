<?php

namespace App\Http\Controllers\Teacher;

use App\Student;
use App\Teacher;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function students_register()
    {
        $stt = 1;
        $students = \Auth::user()->teacher->students()->whereHas('teachers', function ($q) {
            $q->where('teacher_approve', '=', 0)->where('student_approve', '=', 0);
        })->get();


        return view('teacher.students-register', compact('students', 'stt'));
    }

    public function approve($id)
    {
        $teacher = Auth::user()->teacher;
        $students = $teacher->students()->whereHas('teachers', function ($q) {
            $q->where('teacher_approve', '=', 1)->where('student_approve', '=', 0);
        })->get();
        $student_number = $students->count();

        if ($student_number >=5) {
            \Alert::error('Thầy/Cô chỉ được phép hướng dẫn tối đa 5 sinh viên.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } else {
            $teacher->students()->updateExistingPivot($id,  ['teacher_approve' => 1]);
            \Alert::success('Đã đồng ý yêu cầu tham gia khóa luận của sinh viên ' . Student::find($id)->full_name,
                'Thành công')->autoclose(2500);
            return back();
        }
    }
}
