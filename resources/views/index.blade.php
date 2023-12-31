@extends('layouts.layout')

@section('content')
  {{-- <div class="row my-3">
    <div class="col-12">
        <div class="section-title">
            <h2>Selamat Datang di Kedai Papaji</h2>
            <p>Bebas nongkrong sampai jam 12:00 malam free wifi</p>
        </div>
    </div>
  </div> --}}

  <!-- Start Hero Area -->
  <section class="hero-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-10">
              <img src="{{ asset('images/dants.png') }}" alt="" width="100%" style="margin:-300px -10px -200px -10px;">
                {{-- <div class="slider-head d-block">
                    <!-- Start Hero Slider -->
                    <div class="hero-slider">
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/dants.png') }}');">
    
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/dants.png') }}');">
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/dants.png') }}');">
                        </div>
                        <!-- End Single Slider -->
                    </div>
                    <!-- End Hero Slider -->
                </div> --}}
            </div>
            
        </div>
    </div>
  </section>
  <!-- End Hero Area -->

  {{-- category product --}}
  <section class=" p-1">
    <div class="cantainer  px-2 my-3 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12 ">
          <div class="bg-white p-4 rounded">
            <div class="row justify-content-lg-center justify-content-md-start mb-5">
              <div class="section-title" >
                <h2>Food & Beverage</h2>
              </div>
              @foreach ($food_categories as $food)
                  <div class="col-3 col-lg-2 col-md-2 mb-3">
                    <div class="text-center ">
                      <a href="/category/{{ $food->id }}">
                          <img src="{{ asset('images/category/' . $food->image) }}" class=" imgCategory rounded" alt="...">
                          <p class="text-center text-secondary">{{ $food->category_name }}</p>
                      </a>
                    </div>
                  </div>
              @endforeach
            </div>
            <div class="row justify-content-lg-center justify-content-md-start mb-5">
              <div class="section-title">
                <h2>Drinks</h2>
              </div>
              @foreach ($drink_categories as $drink)
                  <div class="col-3 col-lg-2 col-md-2 mb-3">
                    <div class="text-center ">
                      <a href="/category/{{ $drink->id }}">
                          <img src="{{ asset('images/category/' . $drink->image) }}" class=" imgCategory rounded" alt="...">
                          <p class="text-center text-secondary">{{ $drink->category_name }}</p>
                      </a>
                    </div>
                  </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="section-title">
                      <h2>Recomended Product</h2>
                      {{-- <p>Produk yang ditawarkan dijamin 100% Halal ya Gaes ya</p> --}}
                  </div>
              </div>
          </div>
          <div class="products">
            <div class="row justify-content-center">
              @foreach ($products as $data)
                <div class="col-lg-3 col-6">
                  <div class="product">
                    <div class="product-under">
                      <div class="product-summary">
                        <!-- Start Single Product -->
                        <div class="single-product">
                          <div class="product-image">
                              <img src="{{ asset('images/product/' .  $data->image ) }}" alt="#">
                              @if ($data->status == 0)
                              <div class="button">
                                <button class="btn addToCart" data-product-id="{{ $data->id }}" ><i class="lni lni-cart"></i> Add to Cart</button>
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
          
      </div>
    </section>
  <!-- End Trending Product Area -->




  <!-- Start Call Action Area -->
  <section class="call-action section" style="background: #C8AE7D">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Cek status pesananmu sekarang!<br>
                         </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"> Kamu bisa cek saat ini juga dengan klik tombol di bawah ini</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="/order/status" class="btn">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End Call Action Area -->



@endsection
