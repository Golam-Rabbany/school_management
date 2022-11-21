@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="container mx-auto my-32">
    <div>

        <div class="bg-white relative shadow rounded-lg w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
            <div class="flex justify-center">
                    <img src="{{asset('uploads/student/'.$students->photo)}}" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
            </div>
            
            <div class="mt-16">
                <h1 class="font-bold text-center text-3xl text-gray-900">{{$students->name}}</h1>
                <p class="text-center text-sm text-gray-400 font-medium">{{$students->roll}}</p>
                <p>
                    <span>
                        
                    </span>
                </p>
                <div class="my-5 px-6">
                    <a href="#" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Connect with <span class="font-bold">@pantazisoft</span></a>
                </div>
                <div class="flex justify-between items-center my-5 px-6">
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Phone</a>
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Email</a>
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                    <a href="" class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                </div>

                <div class="w-full">
                    <h3 class="font-medium text-gray-900 text-left px-6">Details</h3>
                    <div class="mt-2 w-full flex flex-col items-center overflow-hidden text-sm">
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Roll : </span><span>{{$students->roll}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Registration : </span><span>{{$students->reg}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Father Name : </span><span>{{$students->fname}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Mother Name : </span><span>{{$students->mname}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Address : </span><span>{{$students->address}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Birth Date : </span><span>{{$students->birth}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">National Id : </span><span>{{$students->national_id}}</span>
                        </a>
                        <a href="#" class="border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                            <span class="text-gray-500">Last Admission : </span><span>{{$students->admission}}</span>
                        </a>

                        

                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection