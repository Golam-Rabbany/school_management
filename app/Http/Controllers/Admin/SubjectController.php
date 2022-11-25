<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subject = Subject::all();
        return view('admin.subject.index',compact('subject'));
    }

    public function create(){
        return view('admin.subject.create');
    }
    
    public function store(Request $request){
        $sub = new Subject();
        $sub->name = $request->name;
        $sub->credit = $request->credit;
        $sub->code = $request->code;
        $sub->credit = $request->credit;
        $sub->save();
        return back();


    }

    public function edit($id){
        $subject = Subject::find($id);
        return view('admin.subject.edit',compact('subject'));
    }

    public function update(Request $request, $id){
        

        $data = Subject::find($id);
        $data->update($request->all());
        return back();
        // $data = Subject::update($request->except('_token')+[

        // ]);
    }

    public function trash($id){
        $del = Subject::find($id);
        $del->delete();
        return back()->with('delete', 'Delete Done!!');
    }
    
    
    
}
