<?php

namespace App\Http\Controllers\Admin;

use App\Models\Studnet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StudentPayment;

class PaymentController extends Controller
{

    public function index()
    {
       
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $pay = new StudentPayment();
        $pay->student_id = $request->student_id;
        $pay->user_id = $request->user_id;
        $pay->pay_details = $request->pay_details;
        $pay->pay_date = $request->pay_date;
        $pay->pay_amount = $request->pay_amount;
        $pay->save();
        return back()->with('success', 'Your Payment Successfully Done!!');
    }

    public function show($id)
    {
        $payments = StudentPayment::where('student_id', $id)->get();
        $student = Studnet::where('id', $id)->first();
        return view('admin.student.payment',compact('student','payments'));
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
