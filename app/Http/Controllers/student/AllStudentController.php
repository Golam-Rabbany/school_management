<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\StudentPayment;
use App\Models\Studnet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllStudentController extends Controller
{
   
    public function index()
    {
        $detail = Studnet::where( 'user_id', Auth::user()->id)->first();
        $batch = Studnet::with(['group_student.group_class','group_student.group_shift'])->where( 'user_id', Auth::user()->id)->first('batch_id');
        return view('student.index',compact('detail','batch'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function payment(){
        // return Auth::user()->id;
        $payments = StudentPayment::where('user_id', Auth::user()->id)->get();
        return view('student.payment',compact('payments'));
    }
}
