<?php

namespace App\Http\Controllers\Admin;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentDepartmentController extends Controller
{
    public function index()
    {
        $stt = 1;
        $departments = Department::all();

        return view('admin.department.index', compact('departments', 'stt'));
    }
}
