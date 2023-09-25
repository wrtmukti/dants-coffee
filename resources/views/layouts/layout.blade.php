<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Dant's Coffee</title>
    <meta name="description" content="" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/Dants.png') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('vendor/shopgrids/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/shopgrids/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/shopgrids/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/shopgrids/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/shopgrids/assets/css/main.css') }}" />
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}" />
</head>

<body>
    
    <!-- Start Header Area -->
    <div class="header navbar-area" >
        <!-- Start Topbar -->
        
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="/">
                            <h4 class="fw-bold">Dant's Coffee</h4>
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">
                        <!-- Start Main Menu Search -->
                        
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>CS (wa): 081380787604
                                    {{-- <span>081380787604</span> --}}
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="cart-items">
                                    <div class=" shopping-cart">
                                        <div class="sum-prices">
                                            <button type="button" class="main-btn " data-bs-toggle="modal" data-bs-target="#exampleModal1" >
                                                <i class="lni lni-cart shoppingCartButton text-white"></i>
                                            </button>
                                            <span class="text-dark" id="sum-prices"></span>
                                        </div>
                                    </div>

                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        @php
            $category = \App\Models\Category::all();
            $food = \App\Models\Category::where('category_type', '0')->get();
            $drink = \App\Models\Category::where('category_type', '1')->get();
        @endphp
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">
                        <!-- Start Mega Category Menu -->
                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i></span>
                        </div>
                        <!-- End Mega Category Menu -->
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg" >
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Foods</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            @foreach ($food as $data)
                                            <li class="nav-item"><a href="/category/{{ $data->id }}">{{ $data->category_name }}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Drinks</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            @foreach ($drink as $data)
                                                <li class="nav-item"><a href="/category/{{ $data->id }}">{{ $data->category_name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="" href="/order/status" >Order Status</a>
                                    </li>

                                </ul>
                                
                            </div> <!-- navbar collapse -->
                            <div class=" text-end d-lg-none">
                                {{-- <form class="d-flex " role="search" action="/search" method="post" >
                                    @csrf
                                    <input class="form-control me-2 rounded-pill" type="search" name="search" placeholder="cari produk.." aria-label="Search">
                                    <button type="submit" class="btn rounded-pill"  style="background: #65451F">
                                        <i class="lni lni-search text-white"></i>
                                    </button>
                                </form> --}}
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        <form class="d-flex" role="search" action="/search" method="post" >
                            @csrf
                            <input class="form-control me-2 rounded-pill" type="search" name="search" placeholder="cari produk.." aria-label="Search">
                            <button type="submit" class="btn rounded-pill"  style="background: #65451F">
                                <i class="lni lni-search text-white"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
      </div>
    <!-- End Header Area -->

     {{-- modal --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Keranjang Saya</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="/order/store" method="post" novalidate>
              @csrf
              <input name="status" class="form-control" type="hidden" value="0" readonly="readonly">
              {{-- <input name="type" class="form-control" type="hidden" value="" readonly="readonly">
              <input name="note" class="form-control" type="hidden" value="" readonly="readonly"> --}}
              <input name="price" id="total-prices" class="form-control" type="hidden" value="" readonly="readonly">
  
              <div class="modal-body producstOnCart hide">
              <ul id="buyItems">
                  <h4 class="empty">Keranjang kamu kosong :(</h4>
              </ul>
              </div>
              <div class="modal-footer d-none" id="modal-footer">
              <input id="total_price" class="form-control text-center mb-4 fw-bold" type="text" value="" readonly="readonly">
              @php
                  $tables = App\Models\Table::where('status', 1)->get();
              @endphp
              <div class="form-control ">
                  <label for="type" class="text-danger">*Tipe Order</label>
                  <select id="order_type" name="type" class="form-control" id="exampleFormControlSelect1" value=" {{ old('type') }}">
                      <option value="null" class="text-secondary">Pilih Tipe Order</option>
                      <option value="0">Dine In</option>
                      {{-- <option value="1">Takeaway</option> --}}
                      <option value="2">Reservasi</option>
                  </select>          
              </div>
              <div id="form_type" class=" form-control">
                
              </div>
              
              
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button id="checkout_btn" type="submit" class="btn checkout text-white" style="background: #65451F" disabled>Checkout</button>
          
              </div>
          </form>
  
          </div>
      </div>
    </div>
    {{-- CONTENT --}}
    @yield('content')
    {{-- END OF CONTENT --}}


    <!-- Start Footer Area -->
    <footer class="footer" style="background: #765827">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="">
                                <h3 style="color: white;"> Dant's Coffee </h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12" >
                            <div class="footer-newsletter" >
                                <h4 class="title">
                                    Kirim Pesan Review Untuk Kami
                                    <span>Dapatkan Promo special untuk reviewer kami</span>
                                </h4>
                                <div class="newsletter-form-head">
                                    <form action="#" method="get" target="_blank" class="newsletter-form">
                                        <input name="EMAIL" placeholder="kirim pesan disini." type="email">
                                        <div class="button">
                                            <button class="btn" style="background: #65451F">Kirim<span class="dir-part" ></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">

                        <div class="copyright">
                            <p>License By Dant's Coffee</a></p>
                        </div>
                        {{-- <div class="col-lg-6 col-12">
                        </div> --}}
                        {{-- <div class="col-lg-6 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Me On:</span>
                                </li>
                                <li><a href="https://instagram.com/mukti.wrtm" target="blank"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="https://twitter.com/wrtm_mukti" target="blank"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="https://www.facebook.com/mukti.wrtm/" target="blank"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="https://github.com/wrtmukti" target="blank"><i class="lni lni-github"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top" style="background: #65451F">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>


    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('vendor/shopgrids/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/shopgrids/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/shopgrids/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/shopgrids/assets/js/main.js') }}"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>

{{-- ordertype --}}
<script>
    var orderType = document.getElementById('order_type');
    var formType = document.getElementById('form_type');
    var checkoutBtn = document.getElementById('checkout_btn');

    orderType.addEventListener('change', (e) => {
    switch (e.target.value) {
        case "null":
            checkoutBtn.disabled = true;
            formType.innerHTML = `
            `;  
        break;
        case "0":
            checkoutBtn.disabled = false;
            formType.innerHTML = `
                <label for="name">Nama Pemesan</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="no_table" class="text-danger">*Nomor Meja</label>
                <select id="no_table" name="no_table" class="form-control" id="exampleFormControlSelect1" value=" {{ old('no_table') }}">
                    <option value="">Pilih Meja</option>
                    @foreach ($tables as $data)
                    <option value="{{ $data->no_table }}">{{ $data->no_table }}</option>
                    @endforeach
                </select>    
                <label for="note" class="">Catatan</label>      
                <textarea name="note" class="form-control" type="text"  placeholder="*catatan" ></textarea>
            `;
        break;
        case "1":
            checkoutBtn.disabled = false;
            formType.innerHTML = `
                <label for="name">Nama Pemesan</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="name">Catatan</label>
                <textarea name="note" class="form-control" type="text"  placeholder="*catatan" ></textarea>
            `;
        break;
        
        case "2":
            checkoutBtn.disabled = false;
            formType.innerHTML = `
            <label for="name">Nama Pemesan</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <label for="whatsapp">Nomor Whatsapp</label>
            <div class="row">
                <div class="col-2 ps-3 pe-0 ">
                    <input type="text" class="form-control"  value="+62" disabled>
                </div>
                <div class="col">
                    <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="8123xxxx" required>
                </div>
            </div>
            @error('whatsapp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="visitor">Jumlah Orang</label>
            <input id="visitor" type="number" class="form-control @error('visitor') is-invalid @enderror" name="visitor" value="{{ old('visitor') }}" required>
            @error('visitor')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="date">Tanggal Reservasi</label>
            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required>
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="start-time">Jam Mulai:</label>
                        <input type="time" class="form-control" id="start-time" name="start_time">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="end-time">Jam Selesai:</label>
                        <input type="time" class="form-control" id="end-time" name="finish_time">
                    </div>
                </div>
            </div>
            <label for="name">Catatan</label>
            <textarea name="note" class="form-control" type="text"  placeholder="*catatan" ></textarea>
            `;
        break;
    }
    });
    
</script>

{{-- cart --}}
<script>
    let productsInCart = JSON.parse(localStorage.getItem('shoppingCart'));
    if(!productsInCart){
      productsInCart = [];
    }
    const parentElement = document.querySelector('#buyItems');
    const cartSumPrice = document.querySelector('#sum-prices');
    const products = document.querySelectorAll('.product-under');


    const countTheSumPrice = function () { // 4
      let sum = 0;
      productsInCart.forEach(item => {
        sum += item.price;
      });
      return sum;
    }

    const updateShoppingCartHTML = function () {  // 3
      localStorage.setItem('shoppingCart', JSON.stringify(productsInCart));
      if (productsInCart.length > 0) {
        let result = productsInCart.map(product => {
          return `
            <li class="buyItem mb-3">
              <div class="row ">
                <div class="col-5">
                  <img src="${product.image}" class="imgProduct">
                </div>
                <div class="col-7">
                  <input name="product_id[]" class="form-control" type="hidden" value="${product.id}" readonly="readonly">
                  <input name="" class="form-control" type="text" value="${product.name}" readonly="readonly">
                  <input name="" class="form-control" type="text" value="Rp ${product.price},-" readonly="readonly">
                  <div class="row mt-2 pe-2">
                    <div class="col-3">
                      <button class="button-minus btn btn-secondary" style="padding:8px; background: #65451F;" data-id=${product.id}>-</button>
                    </div>
                    <div class="col-6">
                      <input name="amount[]" class="form-control countOfProduct text-center" type="text" value="${product.count}" readonly="readonly">
                    </div>
                    <div class="col-3">
                      <button class="button-plus btn btn-secondary" style="padding:8px; background: #65451F;" data-id=${product.id}>+</button>
                    </div>
                  </div>
                </div>
              </div>
            </li>`
        });
        parentElement.innerHTML = result.join('');
        document.querySelector('.checkout').classList.remove('hidden');
        cartSumPrice.innerHTML = 'Rp  ' + countTheSumPrice() + ',-';
        document.getElementById("total-prices").value =  countTheSumPrice();
        document.getElementById("total_price").value ='Total : Rp  ' + countTheSumPrice() + ',-';
        document.querySelector('#modal-footer').classList.remove('d-none');

      }
      else {
        document.querySelector('.checkout').classList.add('hidden');
        document.querySelector('#modal-footer').classList.add('d-none');
        parentElement.innerHTML = '<p class="empty text-center">Keranjang Kamu Kosong :(</p>';
        cartSumPrice.innerHTML = '';
      }
    }

    function updateProductsInCart(product) { // 2
      for (let i = 0; i < productsInCart.length; i++) {
        if (productsInCart[i].id == product.id) {
          productsInCart[i].count += 1;
          productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;
          return;
        }
      }
      productsInCart.push(product);
    }

    products.forEach(item => {   // 1
      item.addEventListener('click', (e) => {
        if (e.target.classList.contains('addToCart')) {
          const productID = e.target.dataset.productId;
          const productName = item.querySelector('.productName').innerHTML;
          const productPrice = item.querySelector('.priceValue').innerHTML;
          const productImage = item.querySelector('img').src;
          let product = {
            name: productName,
            image: productImage,
            id: productID,
            count: 1,
            price: +productPrice,
            basePrice: +productPrice,
          }
          updateProductsInCart(product);
          updateShoppingCartHTML();
        }
      });
    });

    parentElement.addEventListener('click', (e) => { // Last
      const isPlusButton = e.target.classList.contains('button-plus');
      const isMinusButton = e.target.classList.contains('button-minus');
      if (isPlusButton || isMinusButton) {
        for (let i = 0; i < productsInCart.length; i++) {
          if (productsInCart[i].id == e.target.dataset.id) {
            if (isPlusButton) {
              productsInCart[i].count += 1
            }
            else if (isMinusButton) {
              productsInCart[i].count -= 1
            }
            productsInCart[i].price = productsInCart[i].basePrice * productsInCart[i].count;

          }
          if (productsInCart[i].count <= 0) {
            productsInCart.splice(i, 1);
          }
        }
        updateShoppingCartHTML();
      }
    });

    updateShoppingCartHTML();
</script>



<script>
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
    });
</script>
</body>

</html>