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
    <h2 class="fw-bold text-center">Riwayat Transaksi</h2>
  </div>
  <div class="row my-3">
    <div class="col-6">
      <a href="/admin/transaction/create" class="btn btn-primary">+ buat transaksi</a>
    </div>
  </div>
  @if ($transactions->count() == 0)
    <div class="alert alert-danger text-center">
      Transaksi Masih Kosong
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
                    <th class="text-center" style="width: 40%;"><h5 class=" fw-bold">Tanggal</h5></th>
                    <th class="text-center"><h5 class=" fw-bold">Transaksi</h5></th>
                    <th class="text-center"><h5 class=" fw-bold">Aksi</h5></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transactions as $data)
                  <tr>
                    {{-- <td class="text-center fw-bold "><a href="/admin/transaction/{{ $data->id }}" class="nav-link text-dark">{{ $loop->iteration }}</a></td> --}}
                    <td class="text-center">
                      <a href="/admin/transaction/{{ $data->id }}" class="nav-link  text-dark">{{ $data->updated_at->format("d M Y") }}</a>
                      <a href="/admin/transaction/{{ $data->id }}" class="nav-link  text-dark">{{ $data->updated_at->format("H:i") }}</a>
                    </td>
                    @if ($data->payment_status !== null)
                      @if ($data->payment_status == 0)
                        <td class="text-center fw-bold "><a href="/admin/transaction/{{ $data->id }}" class="nav-link text-primary">+{{ $data->total_price }}</a></td>
                      @else
                        <td class="text-center fw-bold "><a href="/admin/transaction/{{ $data->id }}" class="nav-link text-danger">-{{ $data->total_price }}</a></td>
                      @endif
                    @else
                        <td class="text-center fw-bold "><a href="/admin/transaction/{{ $data->id }}" class="nav-link text-warning ">waiting</a></td> 
                    @endif
                    @if (Auth::user()->role == 1)
                    <td class="text-center">
                      <form action="/admin/transaction/delete/{{$data->id}}" method="post" style="text-decoration: none">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="{{$data->id}}" value="DELETE">
                        <button type="sumbit" class="btn btn-danger text-center " onclick="return confirm('Yakin ingin menghapus transaksi?');">
                          Hapus</i>
                        </button>
                      </form> 
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