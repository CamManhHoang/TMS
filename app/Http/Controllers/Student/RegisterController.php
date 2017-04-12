<?php

namespace App\Http\Controllers\Student;

use App\Teacher;
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
        $student = \Auth::user()->student;
        $student_approved = $student->teachers()->where('student_approve', 1)->exists();

        if ($student_approved) {
            \Alert::error('Bạn đã được tham gia nghiên cứu khóa luận với 1 giáo viên.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } else {
            $student->teachers()->updateExistingPivot($id,  ['student_approve' => 1]);
            \Alert::success('Bạn đã xác nhận tham gia nghiên cứu khóa luận với thầy/cô ' . Teacher::find($id)->full_name,
                'Thành công')->autoclose(2500);
            return back();
        }
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
