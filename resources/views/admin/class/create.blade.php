@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
    <div class="flex justify-between mb-5">
        <span class="text-2xl text-green-500 border-b">Create Subject</span>
        <a href="{{route('admin.subject.index')}}" class="border px-3 py-2">View Subject</a>
    </div>
    <form action="{{route('admin.class.store')}}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Department Name</label>
                <input type="text" name="class_name" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>

        </div>
        <button type="submit" 
            class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
    </form>
</div>    
@endsection