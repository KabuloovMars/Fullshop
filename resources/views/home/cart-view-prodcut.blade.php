<!DOCTYPE HTML>
<html>
	<head>
        <base href="/public">
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="home/cart.css">
	@include('home.css')
	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		@include('home.header')
    @php
        $i=0;
        $total_price = 0
    @endphp

        <section class="h-100 h-custom" style="background-color: #d2c9ff;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                              <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                              <h6 class="mb-0 text-muted">3 items</h6>
                            </div>
                            <hr class="my-4">
                            @foreach ($carts as $cart)
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                  src="storage/product-img/{{ $cart->img }}"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">{{ $cart->product_name }}</h6>
                                <h6 class="text-muted">{{ $cart->quantity }}</h6>
                                <h6 class="text-black mb-0"></h6>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                  <i class="fas fa-minus"></i>
                                </button>



                                <button class="btn btn-link px-2"
                                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                  <i class="fas fa-plus"></i>
                                </button>
                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">${{ $cart->total_price }}</h6>
                              </div>
                              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                              </div>
                            </div>

                            @endforeach


                            <hr class="my-4">

                            <div class="pt-5">
                              <h6 class="mb-0"><a href="#!" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">

                                <div class="d-flex justify-content-between mb-4">
                                    {{-- <h5 class="text-uppercase">{{ $cart->quantity }}</h5> --}}
                                    {{-- <h5>$ {{ $carts->price }}</h5> --}}
                                </div>

                            <h5 class="text-uppercase mb-3">Give code</h5>

                            <div class="mb-5">
                              <div class="form-outline">
                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                              </div>
                            </div>

                            <hr class="my-4">

                            @foreach ($carts as $cart)

                            @php
                            $i++;
                            $total_price = $cart->total_price + $total_price
                            @endphp
                                    @endforeach
                            <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total price</h5>
                              <h5>${{$total_price }}</h5>
                            </div>

                            <a href={{ route('addToOrder') }}><button type="button" class="btn btn-dark btn-block btn-lg"
                              data-mdb-ripple-color="dark">ZAKAZ</button></a>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


        @include('home.footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	@include('home.js')

	</body>
</html>
