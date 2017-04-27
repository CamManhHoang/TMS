<?php

namespace App\Http\Controllers\Admin;

use Alert;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        $stt = 1;
        $departments = Department::all();

        return view('admin.department.index', compact('departments', 'stt'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6',
        ]);

        $department = new Department();
        $department->name_vn = $request->name;
        $department->name_en = $request->name_en;
        $department->description = $request->descrpt;
        $department->save();

        Alert::success('Thêm mới bộ môn thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        foreach ($department->teachers as $teacher) {
            $teacher->department_id = 0;
            $teacher->save();
        }
        $department->delete();

        Alert::success('Xoá bộ môn thành công!',
            'Thành công')->autoclose(2500);
        return back();
    }
}
