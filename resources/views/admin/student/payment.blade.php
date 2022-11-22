@extends('admin.layouts.master')

@section('admin_dashboard')
@if(session('success'))
    <div class="w-full py-3 bg-green-500 text-white text-center mx-auto">{{session('success')}}</div>
@endif
<div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 pb-10 pt-16">
    <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px">
        <div class="w-full pt-1 pb-5">
            <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                <img class="" src="{{asset('uploads/student/'.$student->photo)}}" alt="">
            </div>
        </div>
        <div class="mb-10">
            <h1 class="text-center font-bold text-xl uppercase">Secure payment info</h1>
        </div>
        <div class="mb-3 flex -mx-2">
            <div class="px-2">
                <label for="type1" class="flex items-center cursor-pointer">
                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type1" checked>
                    <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png" class="h-8 ml-3">
                </label>
            </div>
            <div class="px-2">
                <label for="type2" class="flex items-center cursor-pointer">
                    <input type="radio" class="form-radio h-5 w-5 text-indigo-500" name="type" id="type2">
                    <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png" class="h-8 ml-3">
                </label>
            </div>
        </div>
    <form action="{{route('admin.payment.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="student_id" value="{{$student->id}}" type="hidden"/>
        <input name="user_id" value="{{$student->user_id}}" type="hidden"/>

        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Roll</label>
            <div>
                <input name="roll" disabled class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="{{$student->roll}}" type="text"/>
            </div>
        </div>
        <div class="mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Name</label>
            <div>
                <input name="name" disabled class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="{{$student->name}}" type="text"/>
            </div>
        </div>
        <div class="mb-3 -mx-2 flex items-end">
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Payment Details</label>
                <div>
                    <select name="pay_details" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                        <option value="">--select--</option>
                        <option value="1">Registration Fee</option>
                        <option value="2">Monthly Fee</option>
                        <option value="3">Tuition Fee</option>
                        <option value="4">Examination Fee</option>
                        <option value="5">Activity Fee</option>
                        <option value="6">Other</option>
                    </select>
                </div>
            </div>
            <div class="px-2 w-1/2">
                <label class="font-bold text-sm mb-2 ml-1">Payment Date</label>
                <div>
                <input name="pay_date" type="date" value="{{ now()->format('Y-m-d') }}" class=" w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
            </div>
            </div>
        </div>
        <div class="w-1/2 mb-3">
            <label class="font-bold text-sm mb-2 ml-1">Payment Amount</label>
            <div>
                <input name="pay_amount" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="0000" type="text"/>
            </div>
        </div>
        <div>
            <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
        </div>
    </form>
    </div>
</div>

<div class="bg-gray-100">
    <div class="p-3 mx-5">
      <div class="overflow-x-auto">
          <table class="table-auto w-full">
              <thead class="text-xs font-semibold uppercase text-gray-400 ">
                  <tr class="border-b-2">
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Paid Date</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Payment Details</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">Credit (&#2547;)</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-center">Status</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-center">Option</div>
                      </th>
                  </tr>
              </thead>
              <tbody class="text-sm divide-y divide-gray-100">
                @foreach ($payments as $payment)
                  <tr>
                      <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{$payment->pay_date}}</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left">
                          @if ($payment->pay_details == 1)
                          Registration Fee
                          @elseif($payment->pay_details == 2)
                          Monthly Fee
                          @elseif($payment->pay_details == 3)
                          Tuition Fee
                          @elseif($payment->pay_details == 4)
                          Examination Fee
                          @elseif($payment->pay_details == 4)
                          Activity Fee
                          @elseif($payment->pay_details == 4)
                          Other
                          @endif</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-left font-medium text-green-500">{{$payment->pay_amount}}</div>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                          <div class="text-lg text-center">
                            <span class="bg-orange-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Paid</span>
                          </div>
                      </td>
                      <td class="p-2 whitespace-nowrap flex justify-center">
                            <button class="rounded flex items-center text-sm bg-violet-600 text-white p-2">Action <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                              </svg>
                              </button>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
    </div>
</div>
@endsection