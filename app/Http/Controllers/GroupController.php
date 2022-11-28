<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Shift;
use App\Models\StudentClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
       return $batches = StudentClass::with('class_shift','class_batch')->get();
        return view('admin.group.index',compact('batches'));
    }

    public function create()
    {
        $class = StudentClass::all();
        $shift = Shift::all();
        return view('admin.group.create',compact('class','shift'));
    }

    public function store(Request $request)
    {
        $group = Group::insert($request->except('_token')+[
            'created_at'=> Carbon::now(),
        ]);
        // $group = new Group();
        // $group->class_id = $request->class_id;
        // $group->shift_id = $request->shift_id;
        // $group->batch = $request->batch;
        // $group->start_time = $request->start_time;
        // $group->end_time = $request->end_time;
        // $group->save();
        return back();

    }

    public function show($id)
    {
         $batches = Group::where('class_id', $id)->get();
        return view('admin.group.index',compact('batches'));
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

    public function getClassGroupSection($id){
        return Shift::where('class_id', $id)->get();
    }
}
