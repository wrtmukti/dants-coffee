@extends('admin.layouts.layout')
@section('content')


<div class="row my-3">
  <p class="display-4 text-center fw-bold">Tambah Product</p>
  <p class="text-center">Kategori " {{ $category->category_name }} "</p>
</div>

<div class="card shadow p-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="/admin/product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          {{-- <label for="type">Tipe Produk</label> --}}
          <input id="type" type="hidden" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $category_type }}" placeholder="" required autocomplete="type" autofocus readonly="readonly">
          @error('type')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          {{-- <label for="category_id">Kategori</label> --}}
          <input id="category_id" type="hidden" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $category->id }}" placeholder="" required autocomplete="category_id" autofocus readonly="readonly">
          @error('category_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="sku">SKU</label>
          <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku" value="{{ old('sku') }}" required autocomplete="sku" autofocus>
          @error('sku')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="name">Nama Produk</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1" value=" {{ old('status') }}">>
            <option value="0">aktif</option>
            <option value="1">belum aktif</option>
          </select>          
          @error('status')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="name">Gambar</label>
          <input type="file" name="image" class="form-control" placeholder="image">
        </div>
        <div class="form-group">
          <label for="price">Stok</label>
            <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>
            @error('stock')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror        
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection