@extends('layouts.layout')

@section('content')
  <div class="row my-3">
    <div class="col-12">
        <div class="section-title">
            <h2>Selamat Datang di Kedai Papaji</h2>
            <p>Bebas nongkrong sampai jam 12:00 malam free wifi</p>
        </div>
    </div>
  </div>

  <!-- Start Hero Area -->
  <section class="hero-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="slider-head d-block">
                    <!-- Start Hero Slider -->
                    <div class="hero-slider">
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/website/banner.jpg') }}');">
    
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/website/banner3.jpg') }}');">
                        </div>
                        <!-- End Single Slider -->
                        <!-- Start Single Slider -->
                        <div class="single-slider"
                            style="background-image: url('{{ asset('images/website/banner4.jpg') }}');">
                        </div>
                        <!-- End Single Slider -->
                    </div>
                    <!-- End Hero Slider -->
                </div>
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
              <h5 class="text-center mb-4 text-dark">Kategori Makanan</h5>
              @foreach ($food_categories as $food)
                  <div class="col-3 col-lg-1 col-md-2 mb-3">
                    <div class="text-center ">
                      <a href="/category/{{ $food->id }}">
                          <img src="{{ asset('images/category/' . $food->image) }}" class=" imgCategory " alt="...">
                          <p class="text-center text-dark">{{ $food->category_name }}</p>
                      </a>
                    </div>
                  </div>
              @endforeach
            </div>
            <div class="row justify-content-lg-center justify-content-md-start mb-5">
              <h5 class="text-center mb-3 text-dark mb-4">Kategori Minuman</h5>
              @foreach ($drink_categories as $drink)
                  <div class="col-3 col-lg-1 col-md-2 mb-3">
                    <div class="text-center ">
                      <a href="/category/{{ $drink->id }}">
                          <img src="{{ asset('images/category/' . $drink->image) }}" class=" imgCategory " alt="...">
                          <p class="text-center text-dark">{{ $drink->category_name }}</p>
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
                      <h2>Produk Terlaris Kedai Papaji</h2>
                      <p>Produk yang ditawarkan kedai papaji dijamin 100% Halal ya Gaes</p>
                  </div>
              </div>
          </div>
          <div class="products">
            <div class="row justify-content-center">
              @foreach ($products as $data)
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="product">
                    <div class="product-under">
                      <div class="product-summary">
                        <!-- Start Single Product -->
                        <div class="single-product">
                          <div class="product-image">
                              <img src="{{ asset('images/product/' .  $data->image ) }}" alt="#">
                              @if ($data->status == 0)
                              <div class="button">
                                <button class="btn addToCart" data-product-id="{{ $data->id }}"><i class="lni lni-cart"></i> Add to Cart</button>
                              </div>
                              @else
                              <div class="button">
                                <button class="btn btn-dark" >Kosong</button>
                              </div>
                              @endif
                              
                          </div>
                          <div class="product-info">
                            @if ($data->type == 0)
                            <span class="category">Makanan</span>
                            @else
                            <span class="category">Minuman</span>
                            @endif
                              <h4 class="title">
                                  <a class="productName" href="product-grids.html">{{ $data->name }}</a>
                              </h4>

                              <div class="price ">
                                  Rp.<span class="priceValue">{{ $data->price }}</span>,-
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
  <section class="call-action section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Terima Kasih Sudah Bermain di Kedai Papaji<br>
                            Jangan lupa jajan :)</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Untuk melihat status dari pessanan kamu,<br>
                            Kamu bisa cek saat ini juga dengan klik tombol di bawah ini</p>
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

    {{-- <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('{{ asset('vendor/shopgrids/assets/images/banner/banner-1-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('{{ asset('vendor/shopgrids/assets/images/banner/banner-2-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area --> --}}

    {{-- <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info --> --}}

@endsection
