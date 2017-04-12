<?php

namespace App\Http\Controllers\Student;

use Alert;
use Auth;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        $stt = 1;
        $teachers = Teacher::with('researches')->get();
        $student_teachers = Auth::user()->student->teachers;
        $student_approved = $student_teachers->contains('pivot.student_approve', 1);

        return view('student.teachers-info', compact('teachers', 'stt', 'student_approved'));
    }

    public function store(Request $request)
    {
        $student= \Auth::user()->student;
        $teacher = Teacher::findOrFail($request->teacher_id);
        $student_number = $teacher->students()->count();
        $teacher_number = $student->teachers()->count();
        $exists = $student->teachers->contains($request->teacher_id);

        if ($exists) {
            Alert::error('Bạn đã đăng ký khóa luận với giáo viên này rồi.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } elseif ($student_number >=5) {
            Alert::error('Giáo viên này đã đạt giới hạn số lượng sinh viên đăng ký.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } elseif ($teacher_number >=5) {
            Alert::error('Bạn chỉ có thể đăng ký tối đa 5 giáo viên.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } else {
            $student->teachers()->attach($request->teacher_id);
            Alert::success('Yêu cầu của bạn đã được gửi đi. Bạn sẽ nhận được thông báo khi có phản hồi từ phía giáo viên cố vấn.', 'Thành công')->autoclose(3000);
            return back();
        }
    }
}
