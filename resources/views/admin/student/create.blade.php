@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
    <div class="flex justify-between mb-5">
        <span class="text-2xl text-green-500 border-b">Student Form</span>
        <a href="{{route('admin.student.index')}}" class="border px-3 py-2">View Student</a>
    </div>
    <form action="{{route('admin.student.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                <input type="text" name="name"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                <input type="email" name="email"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Phone</label>
                <input type="number" name="phone"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Father Name</label>
                <input type="text" name="fname"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Mother Name</label>
                <input type="text" name="mname"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
                <input type="text" name="address"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Photo</label>
                <input type="file" name="photo"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Date of Birth</label>
                <input type="date" name="birth"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">National Id / Birth Certificate No</label>
                <input type="number" name="national_id"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Blood Group</label>
                <input type="text" name="blood"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Last Admission</label>
                <input type="text" name="last_admission"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Department</label>
                <select name="class_id" id="class" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    <option value="">--select--</option>
                    @foreach ($dept as $department)
                        <option value="{{$department->id}}">{{$department->class_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Shift</label>
                <select name="shift_id" id="shift" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    <option value="">--select--</option>
                    @foreach ($shift as $sft)
                        <option value="{{$sft->id}}">{{$sft->shift}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Batch</label>
                <select name="batch_id" id="batch" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                    <option value="">--select--</option>
                    @foreach ($batch as $btch)
                        <option value="{{$btch->id}}">{{$btch->batch}}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Roll</label>
                <input type="number" name="roll"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <div class="">
                <label for="text" class="text-sm font-medium text-gray-900 block mb-2">Registration</label>
                <input type="number" name="reg"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
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
<script>
    $(document).ready(function(){
        $("#shift").change(function(){
            var hello = $("#shift").val();
            var u = "{{route('admin.getGroupShiftSection', 'id')}}";
            var url = u.replace('id', hello);
            var value = '';
            $.get(url, function(data){
                if(data){
                    $("#batch").empty();
                    $("#batch").append('<option value="">--select--</option>');
                    $.each(data,function(key,value){
                        $("#batch").append('<option value="'+value.id+'">'+value.batch+'</option>');
                    });
                }else{
                    $("#batch").empty();
                }
            });
        });
    });
</script>

@endsection