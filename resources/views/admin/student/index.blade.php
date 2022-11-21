@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($classes as $class)
        <a href="{{route('admin.group.show',$class->id)}}" class=""><div class="rounded-xl bg-green-500 flex justify-center py-5">
            <p class="text-2xl text-white font-semibold">{{$class->class_name}}</p>
        </div></a>
        @endforeach
    </div>
</div>
@endsection