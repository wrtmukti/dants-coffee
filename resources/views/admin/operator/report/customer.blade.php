@extends('admin.layouts.layout')
@section('content')
<div class="row">
  @if (session('success'))
  <div class="alert alert-success text-center">
    <p class="fw-bold">{{ session('success') }}</p>
  </div>
  @endif
  @if (session('danger'))
  <div class="alert alert-danger text-center">
    <p class="fw-bold">{{ session('danger') }}</p>
  </div>
  @endif


  <div class="row my-3">
    <h2 class="fw-bold text-center">Data Pelanggan</h2>
  </div>



  @if ($customers->count() == 0)
    <div class="alert alert-danger text-center">
      Data Pelanggan Masih Kosong
    </div>
  @else
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="saleTable">
                <thead>
                  <tr>
                    {{-- <th class="text-center" style="width: 60%;"><h5 class=" fw-bold">No</h5></th> --}}
                    <th class="text-center" style="width: 40%;"><h5 class=" fw-bold">Nama</h5></th>
                    {{-- <th class="text-center" style="width: 40%;"><h5 class=" fw-bold">Order</h5></th> --}}
                    <th class="text-center"><h5 class=" fw-bold"> Whatsapp</h5></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($customers as $data)
                  <tr>
                    <td class="text-center">
                      <a  class="nav-link  text-dark">{{ $data->name }}</a>
                    </td>
                    {{-- <td class="text-center fw-bold "><a href="/admin/order/{{ $data->id }}" class="nav-link text-dark">{{ $loop->iteration }}</a></td> --}}
                    {{-- @switch($data->orders->type)
                        @case(0)
                            <td class="text-center fw-bold "><a href="/admin/order/dinein/{{ $data->id }}" class="nav-link text-dark">Dine In</a></td>
                            @break
                        @case(1)
                            <td class="text-center fw-bold "><a href="/admin/order/takeaway/{{ $data->id }}" class="nav-link text-dark">Takeaway</a></td>
                            @break
                        @case(2)
                            <td class="text-center fw-bold "><a href="/admin/order/reservation/{{ $data->id }}" class="nav-link text-dark">Reservation</a></td>
                            @break
                        @default
                            
                    @endswitch --}}
                    @if ($data->whatsapp == null)
                      <td class="text-center">
                        <p>-</p>
                      </td>
                    @else
                      <td class="text-center">
                        <a  class="nav-link  text-dark">+62{{ $data->whatsapp }}</a>
                        <a href="https://wa.me/+62{{ $data['whatsapp'] }}" class="nav-link fw-bold">HUBUNGI</a>
                      </td>
                    @endif
                   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif


</div>
@endsection