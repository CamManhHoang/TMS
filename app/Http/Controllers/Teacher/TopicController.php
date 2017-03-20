<?php

namespace App\Http\Controllers\Teacher;

use Auth;
use Alert;
use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function research_topics()
    {
        $stt = 1;
        $topics = Auth::user()->teacher->topics->sortByDesc('created_at');

        return view('teacher.research-topics', compact('topics', 'stt'));
    }

    public function student_topics()
    {
        $stt = 1;
        $topics = Auth::user()->teacher->topics
            ->where('approve', true)
            ->where('student_id', '<>', 0);

        return view('teacher.student-topics', compact('topics', 'stt'));
    }

    public function pending_topics()
    {
        $stt = 1;
        $topics = Auth::user()->teacher->topics
            ->where('approve', false)
            ->where('student_id', '<>', 0);

        return view('teacher.pending-topics', compact('topics', 'stt'));
    }

    public function approve($id)
    {
        $topic_number = Auth::user()->teacher->topics()
            ->where('approve', true)
            ->count();
        $topic = Topic::findOrFail($id);
        $one_topic_approve = $topic->student->topics->where('approve', true)->count();

        if ($topic_number >= 5) {
            Alert::error('Một giáo viên chỉ có thể hướng dẫn tối đa 5 sinh viên.', 'Có lỗi xảy ra')->autoclose(1500);
            return back();
        } else {
            if ($one_topic_approve >= 1) {
                Alert::error('Sinh viên này đã có đề tài được chấp thuận. Hãy xóa yêu cầu đề tài này.',
                    'Có lỗi xảy ra')->autoclose(1500);
                return back();
            }
        }
        $topic->approve = true;
        $topic->save();

        Alert::success('Đã đồng ý yêu cầu đề tài khóa luận của sinh viên ' . $topic->student->full_name,
            'Thành công')->autoclose(2500);
        return back();
    }

    public function reject($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->student_id = 0;
        $topic->approve = false;
        $topic->save();

        Alert::success('Đã hủy bỏ yêu cầu đăng ký đề tài khóa luận của sinh viên',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
            'description' => 'required|min:6',
        ]);

        $topic = new Topic();
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->student_id = 0;
        $topic->teacher_id = Auth::user()->teacher->id;
        $topic->save();

        Alert::success('Thêm mới đề tài nghiên cứu thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        if ($topic->topic_not_available()) {
            Alert::error('Đề tài này đang có sinh viên đăng ký. Không được phép xóa', 'Có lỗi xảy ra')->autoclose(2500);
            return back();
        }
        $topic->delete();

        Alert::success('Xoá đề tài thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
