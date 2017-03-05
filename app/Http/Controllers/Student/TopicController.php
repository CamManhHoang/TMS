<?php

namespace App\Http\Controllers\Student;

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
}
