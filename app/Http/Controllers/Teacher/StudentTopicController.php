<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Student;
use App\Topic;
use Alert;
use Illuminate\Http\Request;

class StudentTopicController extends Controller
{
    public function create($student_id)
    {
        $student = Student::findOrFail($student_id);
        return view('teacher.topic.create', compact('student'));
    }

    public function store(Request $request, $student_id)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
            'description' => 'required|min:6',
        ]);

        $student = Student::findOrFail($student_id);

        $topic = new Topic();
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->teacher_id = \Auth::user()->teacher->id;
        $topic->student_id = $student->id;
        $topic->save();

        Alert::success('Thêm mới đề tài khóa luận cho sinh viên thành công!',
            'Thành công')->autoclose(2500);
        return redirect()->route('student-topics');
    }
}
