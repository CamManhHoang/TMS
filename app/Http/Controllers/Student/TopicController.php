<?php

namespace App\Http\Controllers\Student;

use Auth;
use Alert;
use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('student.topic', compact('topics'));
    }

    public function register_topic(Request $request, $id)
    {
        $topic_number = Auth::user()->student->topics()->count();

        if ($topic_number > 3) {
            Alert::error('Bạn chỉ được đăng ký tối đa 3 đề tài.', 'Có lỗi xảy ra')->autoclose(3500);
            return back();
        } else {
            $topic = Topic::findOrFail($id);
            $topic->student_id = Auth::user()->student->id;
            $topic->save();

            Alert::success('Chúng tôi sẽ gửi email cho bạn ngay khi đề tài bạn đăng ký được chấp nhận.', 'Đăng ký thành công')->autoclose(3500);
            return back();
        }
    }
}
