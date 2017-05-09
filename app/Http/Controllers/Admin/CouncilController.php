<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Council;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouncilController extends Controller
{
    public function index()
    {
        $stt = 1;
        $councils = Council::all();

        return view('admin.council.index', compact('councils', 'stt'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
            'chairman' => 'required|min:6',
            'secretary' => 'required|min:6',
        ]);

        $council = new Council();
        $council->council_name = $request->name;
        $council->chairman = $request->chairman;
        $council->secretary = $request->secretary;
        $council->save();

        Alert::success('Thêm mới hội đồng bảo vệ khóa luận thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function show($id)
    {
        $stt = 1;
        $council = Council::findOrFail($id);

        return view('admin.council.show', compact('council', 'stt'));
    }
}
