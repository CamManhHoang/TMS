<?php

namespace App\Http\Controllers\Teacher;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function pending_topics()
    {
        $topics = Auth::user()->teacher->topics
            ->where('approve', false)
            ->where('student_id', '<>', 0);

        return view('teacher.pending-topics', compact('topics'));
    }
}
