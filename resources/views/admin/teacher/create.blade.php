@extends('admin.layouts.master')

@section('admin_dashboard')
    <div class="m-3">
        <div class="flex justify-between mb-5">
            <span class="text-2xl text-green-500 border-b">Create Teacher</span>
            <span class="text-lg text-green-500"><a href="{{route('admin.teacher.index')}}">View Teacher</a></span>
        </div>
        <form action="{{route('admin.teacher.store')}}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                    <input type="text" name="name" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                </div>
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Full Address</label>
                    <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                </div>
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Phone</label>
                    <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                </div>
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                </div>
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Designation</label>
                    <input type="text" name="designation" id="designation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                </div>
                <div class="">
                    <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Faculty Inetial</label>
                    <select name="subject_id" id="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        <option value="">--select--</option>
                        @foreach ($sub as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit"
                class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
@endsection
