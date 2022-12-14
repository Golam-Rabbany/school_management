@extends('admin.layouts.master')

@section('admin_dashboard')
<div class="m-3">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      @foreach ($batches as $batch)
      <a href="{{route('admin.department',$batch->id)}}" class=""><div class="rounded-xl bg-yellow-500 flex justify-center py-5">
          <p class="text-2xl text-white font-semibold">{{$batch->batch}}</p>
      </div></a>
      @endforeach
  </div>
</div>
                      
@endsection