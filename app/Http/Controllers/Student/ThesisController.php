<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThesisController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "thesis_file" => "required|mimes:pdf|max:20000"
        ]);

        $student = \Auth::user()->student;

        if ($request->hasFile('thesis_file')) {
            $thesis_file = $request->file('thesis_file');
            $filename = str_slug($student->full_name) . '-' . $thesis_file->getClientOriginalName();
            $request->file('thesis_file')->move(base_path() . '/public/thesis_upload/', $filename);
            $student->thesis_file = 'thesis_upload/' . $filename;
        }

        $student->save();

        \Alert::success('Upload khóa luận thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function show()
    {
        $student = \Auth::user()->student;
        $thesis_file = $student->thesis_file;

        return response()->file($thesis_file);
    }
}
