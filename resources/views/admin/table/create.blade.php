@extends('admin.layouts.layout')
@section('content')


<div class="row my-3">

</div>

<div class="card shadow p-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="/admin/table" method="POST">
        @csrf
        <div class="form-group">
          <input type="hidden" value="" name="category_type">
          <label for="name">Nomor Meja</label>
          <input id="no_table" type="text" class="form-control @error('no_table') is-invalid @enderror" name="no_table" value="{{ old('no_table') }}" required autocomplete="no_table" autofocus>
          @error('no_table')
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