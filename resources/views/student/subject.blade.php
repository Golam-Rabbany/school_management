@extends('layouts.master')

@section('student_dashboard')
<div class="">

            <!-- Table -->
            <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Subject List</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Teacher</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Subject</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Start Time</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">End Time</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                            <div class="font-medium text-gray-800">Alex Shatov</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left flex ">
                                            @foreach ($details->class_group->subject as $sub)
                                            <li class="list-none mx-4">@if ($sub == 1)
                                                <span>Basic English</span>
                                                @elseif ($sub == 2)
                                                <span>Intermediate English</span>
                                                @elseif ($sub == 3)
                                                <span>Advance English</span>
                                                @elseif ($sub == 4)
                                                <span>Math</span>
                                                @elseif ($sub == 5)
                                                <span>Physics</span>
                                                @elseif ($sub == 6)
                                                <span>Chemistry</span>
                                                @elseif ($sub == 7)
                                                <span>Biology</span>
                                                @elseif ($sub == 8)
                                                <span>Bangla</span>
                                            @endif
                                            </li>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$details->group_student->start_time}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">{{$details->group_student->end_time}}</div>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
@endsection