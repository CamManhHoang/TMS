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
        $stt = 1;
        $topics = Topic::all();

        return view('student.topic', compact('topics', 'stt'));
    }

    public function register_topic($id)
    {
        $topic_number = Auth::user()->student->topics()->count();
        $topic = Topic::findOrFail($id);

        if ($topic_number >= 3) {
            Alert::error('Bạn chỉ được đăng ký tối đa 3 đề tài.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } else {
            if ($topic->topic_not_available()) {
                abort(403);
            }
        }
        $topic->student_id = Auth::user()->student->id;
        $topic->save();

        Alert::success('Chúng tôi sẽ gửi email cho bạn ngay khi đề tài bạn đăng ký được chấp nhận.',
            'Đăng ký thành công')->autoclose(2500);
        return back();
    }

    public function show()
    {
        $user = Auth::user();

        $topic = $user->student->topics->where('approve', 1)->first();

        return view('student.my-topic', compact('topic'));
    }
}
