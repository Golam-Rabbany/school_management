<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Shift;
use App\Models\StudentClass;
use App\Models\Studnet;
use Carbon\Carbon;
use Illuminate\Bus\Batch;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $classes = StudentClass::all();
        return view('admin.student.index',compact('classes'));
    }

    public function create()
    {
        $dept = StudentClass::all();
        $shift = Shift::all();
        $batch = Group::all();
        return view('admin.student.create',compact('dept', 'shift', 'batch'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $uploaded = $request->file('photo');
            $extention=$uploaded->getClientOriginalName();
            $filename=time().'.'.$extention;
            $uploaded->move('uploads/student/',$filename);

            $student = Studnet::insert($request->except('_token','photo')+[
                'created_at' => Carbon::now(),
                'photo' => $filename,
            ]);
        }
        return back();
        
    }

    public function show($id)
    {
        $students = Studnet::where('id', $id)->first();
        return view('admin.student.show',compact('students'));
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

    public function show_student($id){

        $students = Studnet::where('batch_id', $id)->get();
        return view('admin.department_student.show',compact('students'));
       
        //  $datas = Studnet::with('group_student')->where('class_id', $id)->get();
        // return $datas = Group::with('group_rel')->where('class_id', $id)->get();
    }

    public function getGroupShiftSection($id){
        return Group::where('shift_id', $id)->get();
    }
}
