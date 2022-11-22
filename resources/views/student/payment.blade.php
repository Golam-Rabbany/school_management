@extends('layouts.master')

@section('student_dashboard')
    
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
                      
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
    </div>
  </div>
@endsection