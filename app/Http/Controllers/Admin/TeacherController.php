<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class TeacherController extends Controller
{
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        try {
            $teacher->students()->detach();
            foreach ($teacher->topics as $topic) {
                $topic->delete();
            }
            foreach ($teacher->researches as $research) {
                $research->delete();
            }
            $teacher->user()->delete();
            $teacher->delete();
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
