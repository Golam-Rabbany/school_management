@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
    <div class="flex justify-between mb-5">
        <span class="text-2xl text-green-500 border-b">Create Subject</span>
        <a href="{{route('admin.subject.index')}}" class="border px-3 py-2">View Subject</a>
    </div>
    <form action="{{route('admin.group.store')}}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Department</label>
                <select name="class_id" id="class" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    <option value="">--select--</option>
                    @foreach ($class as $cls)
                        <option value="{{$cls->id}}">{{$cls->class_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Shift</label>
                <select name="shift_id" id="shift"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    <option value="">--select--</option> 
                    @foreach ($shift as $sft)
                        <option value="{{$sft->id}}">{{$sft->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Batch</label>
                <input type="number" name="batch"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Start Time</label>
                <input type="time" name="start_time" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">End Time</label>
                <input type="time" name="end_time" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
        </div>
        <button type="submit" 
            class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
    </form>
</div>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#class").change(function(){
            var hello = $("#class").val();
            var u = "{{route('admin.getClassGroupSection', 'id')}}";
            var url = u.replace('id', hello);
            var value = '';
            $.get(url, function(data){
                if(data){
                    $("#shift").empty();
                    $("#shift").append('<option value="">--select--</option>');
                    $.each(data,function(key,value){
                        $("#shift").append('<option value="'+value.id+'">'+value.shift+'</option>');
                    });
                }else{
                    $("#shift").empty();
                }
            });
        });
    });
</script>
@endsection