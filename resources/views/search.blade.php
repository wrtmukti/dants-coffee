@extends('layouts.layout')
@section('content')
<div class="row mt-4">
  <div class="col-12">
      <div class="section-title">
          <h2>Pencarian "{{ $search }}"</h2>
      </div>
  </div>
</div>

@if ($products->count() == 0)
<div class="alert alert-danger text-center">
  Produk tidak ditemukan :(
</div>
@else
<div class="products d-none d-lg-block mb-3 container">
  <div class="row">
    @foreach ($products as $data)
      <div class="col-lg-2 col-md-6 col-12">
        <div class="product">
          <div class="product-under">
            <div class="product-summary">
              <!-- Start Single Product -->
              <div class="single-product">
                <div class="product-image">
                    <img src="{{ asset('images/product/' . $data->image) }}" class="imgProduct" alt="#">
                    @if ($data->status == 0)
                    <div class="button">
                      <button class="btn addToCart" data-product-id="{{ $data->id }}" style="background: #65451F">+<i class="lni lni-cart"></i></button>
                    </div>
                    @else    
                    <div class="button">
                        <button class="btn btn-dark" >Kosong</button>
                    </div>
                    @endif
                </div>
                <div class="product-info">
                  <span class="category">{{ $data->category->category_name }}</span>

                    <h4 class="title">
                        <a class="productName" href="product-grids.html">{{ $data->name }}</a>
                    </h4>

                  <div class="price d-none">
                      Rp <span class="priceValue text-dark" >{{ $data->price }}</span>,-
                  </div>
                  <div class="price">
                      Rp <span class="text-dark" >{{  number_format($data->price, 0, ',', '.')  }}</span>,-
                  </div>
                </div>
            </div>
            <!-- End Single Product -->
            </div>
          </div>
        </div>
          
      </div>
    @endforeach
  </div>
</div>

<div class="products d-lg-none d-md-block ">
  <div class="row">
    @foreach ($products as $data)
      <div class="col-md-3">
        <div class="product">
          <div class="product-under ">
            <div class=" product-summary ">
              <!-- Start Single Product -->
              <div class="single-product row ">
                  <div class="col-5 p-3">
                    <img src="{{ asset('images/product/' . $data->image) }}" alt="#" class="imgProduct shadow-sm">
                    <div class="price text-center mt-2">
                      Rp. <span class="priceValue">{{ $data->price }}</span>,-
                    </div>
                  </div>
                <div class="col-7">
                  <div class="product-info">
                    {{-- <span class="category">{{ $data->category->category_name }}</span> --}}
                      <h4 class="title">
                          <a class="productName" href="product-grids.html">{{ $data->name }}</a>
                      </h4>
                      <p>
                        {{ $data->stock }}
                      </p>
                      <div class="row mt-4 p-2">
                        @if ($data->status == 0)
                        <div class="button">
                          <button class="btn addToCart" data-product-id="{{ $data->id }}"><i class="lni lni-cart"></i> Add to Cart</button>
                        </div>
                        @else
                        <div class="button">
                          <button class="btn btn-outline-danger rounded-pill" ><p>yah, habis :(</p> </button>
                        </div>
                        @endif
                      </div>
                      
                  </div>
                </div>
               
                
            </div>
            <!-- End Single Product -->
            </div>
          </div>
        </div>
          
      </div>
    @endforeach
  </div>
</div>

@endif
@endsection