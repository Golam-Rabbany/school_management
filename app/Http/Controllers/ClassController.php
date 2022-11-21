<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\StudentClass;
use App\Models\Studnet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function index()
    {
        return view('admin.class.index');
    }

    public function create()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {
        $class = StudentClass::insert($request->except('_token')+[
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
