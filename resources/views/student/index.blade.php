@extends('layouts.master')

@section('student_dashboard')
{{-- <span class="mb-6 font-bold text-2xl text-gray-500 border-b mx-auto">My Profile</span> --}}
    <div class="p-16">
        <div class="p-8 bg-white shadow mt-6">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div class="text-center order-last md:order-first my-14 md:mt-0">
                    {{-- <div>
                        <button
                            class="text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                            Connect
                        </button>
                    </div> --}}
                </div>
                <div class="relative">
                    <div
                        class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">

                        <img class="h-32 w-32 rounded-full" src="{{ asset('uploads/student/' . $detail->photo) }}"
                            alt="">
                    </div>
                </div>

                <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">

                    {{-- <button
                        class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                        Message
                    </button> --}}
                </div>
            </div>

            <div class="mt-16 text-center border-b pb-12">
                <h1 class=" text-2xl font-medium text-gray-700">{{ $detail->name }}</h1>
                <p class="font-light text-gray-600 mt-3">{{ $detail->roll }}</p>


                <p class="mt-8 text-4xl text-gray-700 font-semibold">Southeast University</p>
                <p class="mt-2 text-gray-500">Bonani, Dhaka, Bangladesh</p>

            </div>

            <div class="mt-12  flex flex-col justify-center">
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
                        <div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Roll :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->roll}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Registration :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->reg}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Department :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$batch->group_student->group_class->class_name}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Shift :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->group_student->group_shift->shift}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Batch No :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$batch->group_student->batch}}
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Email :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->email}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Phone :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            0{{$detail->phone}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Father Name :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->fname}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Mother Name :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->mname}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Address :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->address}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            National id :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->national_id}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Date of Birth :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->birth}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Blood Group :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->blood}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-4 px-6">
                                            Last Admission :
                                        </td>
                                        <td class="py-4 px-6 font-bold">
                                            {{$detail->last_admission}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
