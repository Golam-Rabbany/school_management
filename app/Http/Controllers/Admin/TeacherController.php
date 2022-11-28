<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index',compact('teachers'));
    }

    public function create()
    {
        $sub = Subject::all();
        return view('admin.teacher.create',compact('sub'));
    }

    public function store(Request $request)
    {
        $teacher = Teacher::insert($request->except('_token')+[
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
