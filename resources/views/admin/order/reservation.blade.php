@extends('admin.layouts.layout')
@section('content')
<div class="row my-3">
  <h3 class="text-center">Daftar Pesanan Reservasi</h3>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th class="text-center"><h5 class=" fw-bold">PEMESAN</h5></th>
                <th class="text-center"><h5 class=" fw-bold">WAKTU & TANGGAL</h5></th>
                <th class="text-center"><h5 class=" fw-bold">PENGUNJUNG</h5></th>
                <th class="text-center"><h5 class=" fw-bold">WHATSAPP</h5></th>
                <th class="text-center"><h5 class=" fw-bold">STATUS</h5></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $customer_id => $data)
                @php
                  $pelanggan = App\Models\Customer::find($customer_id);
                @endphp
                @php
                  $orderan = App\Models\Order::where('customer_id', $customer_id)->get();
                @endphp
                <tr>
                    <td class="text-center">
                      <div class="row">
                        <div class="">
                          <a href="/admin/order/reservation/{{ $customer_id }}" class=" nav-link fw-bold">{{ $pelanggan['name'] }}</a>
                          <a href="/admin/order/reservation/{{ $customer_id }}" class="nav-link text-dark">{{ $pelanggan->created_at->diffForHumans(); }}</a>
                        </div>
                      </div>
                      {{-- <div class="row">
                        <a href="/admin/order/{{ $data->id }}" class="nav-link text-dark">{{ $data->updated_at->format("D m 20y") }}</a>
                        <a href="/admin/order/{{ $data->id }}" class="nav-link text-dark">{{ $data->updated_at->format("H:i") }}</a>
                      </div> --}}
                    </td>     
                    <td class="text-center">
                      <div class="row">
                          <a href="/admin/order/reservation/{{ $customer_id }}" class="nav-link text-dark">{{ $pelanggan['date'] }}</a>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-3 p-0">
                            <a href="/admin/order/reservation/{{ $customer_id }}" class="nav-link text-dark">{{ $pelanggan['start_time'] }} - </a>
                          </div>
                          <div class="col-3 p-0">
                            <a href="/admin/order/reservation/{{ $customer_id }}" class="nav-link text-dark">{{ $pelanggan['finish_time'] }}</a>
                          </div>
                      </div>
                    </td>     
                    <td class="text-center">
                      <div class="row">
                        <div class="">
                          <a href="/admin/order/reservation/{{ $customer_id }}" class="nav-link text-dark">{{ $pelanggan['visitor'] }}</a>
                        </div>
                      </div>
                    </td>     
                    <td class="text-center">
                      <div class="row">
                        <div class="">
                          <a href="https://wa.me/+62{{ $pelanggan['whatsapp'] }}" class="nav-link fw-bold">HUBUNGI</a>
                        </div>
                      </div>
                    </td>     
                  
                 
                  @switch($orderan->min('status'))
                      @case(0)
                          <td class="text-center"><a class="btn btn-danger rounded-pill" href="/admin/order/reservation/{{ $customer_id }}"style="font-size: 12px">Pending</a></td> 
                          @break
                      @case(1)
                          <td class="text-center"><a class="btn btn-warning rounded-pill" href="/admin/order/reservation/{{ $customer_id }}"style="font-size: 12px">Progress</a></td>
                          @break
                      @case(2)
                          <td class="text-center"><a class="btn btn-success rounded-pill" href="/admin/order/reservation/{{ $customer_id }}"style="font-size: 12px">Payment</a></td>
                          @break
                          @case(3)
                          <td class="text-center"><a class="btn btn-primary rounded-pill" href="/admin/order/reservation/{{ $customer_id }} " style="font-size: 12px">Finished</a></td>
                          @break
                          @case(4)
                          <td class="text-center"><a class="btn btn-secondary rounded-pill" href="/admin/order/reservation/{{ $customer_id }} " style="font-size: 12px">Ditolak</a></td>
                          @break
                      @default
                          
                    @endswitch
                  
                  
                   
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