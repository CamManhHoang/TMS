<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class StudentController extends Controller
{
    public function index()
    {
        $stt = 1;
        $students = Student::with('user')->get();

        return view('admin.student.index', compact('students', 'stt'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        try {
            $student->teachers()->detach();
            $student->topic->delete();
            $student->user()->delete();
            $student->delete();
        }
        catch(Exception $e) {
            Alert::error('Có lỗi gì đó khiến cho hệ thống không thực hiện được tác vụ này!',
                'Có lỗi xảy ra')->autoclose(2500);
            return back();
        }
        Alert::success('Xoá giáo viên thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
