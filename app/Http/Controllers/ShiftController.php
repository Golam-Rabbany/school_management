<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\StudentClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShiftController extends Controller
{

    public function index()
    {
        $shifts = StudentClass::with('class_shift')->get();
        return view('admin.shift.index',compact('shifts'));
    }

    public function create()
    {
        $class = StudentClass::all();
        return view('admin.shift.create',compact('class'));
    }

    public function store(Request $request)
    {
        $shift = Shift::insert($request->except('_token')+[
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
