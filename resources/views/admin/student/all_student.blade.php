@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full">
                <thead class="bg-yellow-500 border-b">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      #
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Department
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Shift
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Section
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Details
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr class="bg-gray-100 border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$datas->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$datas->batch_class->class_name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                          {{$datas->batch_shift->shift}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$datas->batch_student->batch}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{route('admin.student.show',$datas->id)}}"><span class="px-2 py-1 rounded bg-green-500 text-white text-sm">Details</span></a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

</div>
@endsection