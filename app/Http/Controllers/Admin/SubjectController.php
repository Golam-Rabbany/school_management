<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        return view('admin.subject.index');
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
    
    
    
}
