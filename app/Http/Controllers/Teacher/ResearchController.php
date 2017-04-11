<?php

namespace App\Http\Controllers\Teacher;

use App\Research;
use Auth;
use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResearchController extends Controller
{
    public function research_topics()
    {
        $stt = 1;
        $researches = Auth::user()->teacher->researches->sortByDesc('created_at');

        return view('teacher.research-topics', compact('researches', 'stt'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
            'description' => 'required|min:6',
        ]);

        $research = new Research();
        $research->name = $request->name;
        $research->description = $request->description;
        $research->teacher_id = Auth::user()->teacher->id;
        $research->save();

        Alert::success('Thêm mới hướng nghiên cứu thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function destroy($id)
    {
        $research = Research::findOrFail($id);
        $research->delete();

        Alert::success('Xoá hướng nghiên cứu thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
