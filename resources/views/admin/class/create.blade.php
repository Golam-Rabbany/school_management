@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
    <div class="flex justify-between mb-5">
        <span class="text-2xl text-green-500 border-b">Create Department</span>
        <a href="{{route('admin.subject.index')}}" class="border px-3 py-2">View Department</a>
    </div>
    <form action="{{route('admin.class.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Department Name</label>
                <input type="text" name="class_name" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
        </div>
        <div class="mt-3 w-1/2" x-data="{content:[0] }">
            <label for="text" class="text-sm font-medium text-gray-900 block">Subject</label>

              <template x-for="item in content "  x-bind:key="item">
                <div>
                  <div class="flex justify-end cursor-pointer">
                    <svg x-on:click="content.splice(content.indexOf(item),1)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  </div>
                  <input type="text" name="subject[]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                  {{-- <select name="subject[]" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="">
                    <option value="">--select--</option>
                    @foreach ($sub as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                  </select> --}}
                </div>
             </template>
    
            <div class="flex justify-end cursor-pointer">
              <button type="button" x-on:click="content.push(content.length + Math.random())" class="px-2 py-1 bg-blue-500 text-white mt-2 rounded-full">New?</button>
            </div>
        </div>

        <button type="submit" 
            class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
    </form>
</div>    
@endsection