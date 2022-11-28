@extends('admin.layouts.master')

@section('admin_dashboard')
<div>
        
    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
        <div class="flex justify-between pt-4">
            <span class="text-2xl text-green-500 border-b">View Teacher</span>
            <a href="{{route('admin.teacher.create')}}" class="border px-3 py-2">Create Teacher</a>
        </div>
        <div class="flex flex-col justify-center h-full">
            <!-- Table -->
            <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                @if(Session::get('delete'))
                        <div class="w-full bg-red-500 text-center text-white text-sm py-3">
                            {{session::get('delete')}}
                        </div>
                @endif
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Subject List</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">#</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Address</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Phone</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Email</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Designation</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{$loop->iteration}}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{$teacher->name}}</div>
                                    </td>
                                   
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">{{$teacher->address}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">0{{$teacher->phone}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">{{$teacher->designation}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">{{$teacher->subject_id}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center flex justify-center">
                                            <a href="" class="mx-2"><i class="fa-solid fa-pen-fancy text-green-500 "></i></a>
                                            <form action="" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <button class="mx-2 border-none" onclick="return confirm('Are you sure want to delte this??')"><i class="fa-solid fa-trash  text-red-500"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection