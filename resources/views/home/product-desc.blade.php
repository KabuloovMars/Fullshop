<!DOCTYPE HTML>
<html>

<head>
    <base href="/public">
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('home.css')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .icon-hover:hover {
      border-color: #3b71ca !important;
      background-color: white !important;
      color: #3b71ca !important;
    }

    .icon-hover:hover i {
      color: #3b71ca !important;
    }
    </style>
</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        @include('home.header')

        <section class="py-5">
            <div class="container">
              <div class="row gx-5">
                <aside class="col-lg-4">
                  <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                      <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="storage/product-img/{{ $product->img }}" />
                    </a>
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" />
                    </a>
                    <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
                      <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
                    </a>
                  </div>
                  <!-- thumbs-wrap.// -->
                  <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                  <div class="ps-lg-3">
                    <h4 class="title text-dark">
                    {{ $product->name }}
                    </h4>


                    <div class="mb-3">
                        @if ($product->discount_price==NULL)
                        <span class="h5">${{ $product->price }}</span>
                            @else

                        <span class="h5">${{ $product->discount_price }}</span>
                        @endif
                      <span class="text-muted">/per box</span>
                    </div>

                    <p>
                     {{ $product->desc }}
                    </p>

                    <div class="row">
                      <dt class="col-3">Product Count:</dt>
                      <dd class="col-9">{{ $product->quantity }}</dd>
                    </div>

                    <hr />

                    <div class="row mb-4">

                      <!-- col.// -->
                      <div class="col-md-4 col-6 mb-3">
                        <label class="mb-2 d-block">Quantity</label>
                        <form action="{{ route('addToCart',$product->id) }}" method="post">
                         @csrf
                            <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn bg-danger btn-number"  data-type="minus" data-field="">
                                  <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>

                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-right-plus btn bg-success btn-number" data-type="plus" data-field="">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>

                        </div>
                        <button type="submit" class=" mt-5 btn bg-primary" ><i class="me-1 fa fa-shopping-basket"></i>Add To Cart</button>
                    </form>
                      </div>
                    </div>
                    <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                    <a href="{{ route('SaveProduct',$product->id) }}" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
                  </div>
                </main>
              </div>
            </div>
          </section>
          <!-- content -->

          <section class="bg-light border-top py-4">
            <div class="container">
              <div class="row gx-4">
                <div class="col-lg-8 mb-4">
                  <div class="border rounded-2 px-3 py-2 bg-white">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                      <li class="nav-item d-flex" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
                      </li>
                      <li class="nav-item d-flex" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
                      </li>
                      <li class="nav-item d-flex" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
                      </li>
                      <li class="nav-item d-flex" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
                      </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content" id="ex1-content">
                      <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                        <p>
                          With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                          enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                          pariatur.
                        </p>
                        <div class="row mb-2">
                          <div class="col-12 col-md-6">
                            <ul class="list-unstyled mb-0">
                              <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                              <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet, consectetur</li>
                              <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in reprehenderit</li>
                              <li><i class="fas fa-check text-success me-2"></i>Optical heart sensor</li>
                            </ul>
                          </div>
                          <div class="col-12 col-md-6 mb-0">
                            <ul class="list-unstyled">
                              <li><i class="fas fa-check text-success me-2"></i>Easy fast and ver good</li>
                              <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                              <li><i class="fas fa-check text-success me-2"></i>Modern style and design</li>
                            </ul>
                          </div>
                        </div>
                        <table class="table border mt-3 mb-2">
                          <tr>
                            <th class="py-2">Display:</th>
                            <td class="py-2">13.3-inch LED-backlit display with IPS</td>
                          </tr>
                          <tr>
                            <th class="py-2">Processor capacity:</th>
                            <td class="py-2">2.3GHz dual-core Intel Core i5</td>
                          </tr>
                          <tr>
                            <th class="py-2">Camera quality:</th>
                            <td class="py-2">720p FaceTime HD camera</td>
                          </tr>
                          <tr>
                            <th class="py-2">Memory</th>
                            <td class="py-2">8 GB RAM or 16 GB RAM</td>
                          </tr>
                          <tr>
                            <th class="py-2">Graphics</th>
                            <td class="py-2">Intel Iris Plus Graphics 640</td>
                          </tr>
                        </table>
                      </div>
                      <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                        Tab content or sample information now <br />
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      </div>
                      <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                        Another tab content or sample information now <br />
                        Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                      </div>
                      <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                        Some other tab content or sample information now <br />
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.
                      </div>
                    </div>
                    <!-- Pills content -->
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="px-0 border rounded-2 shadow-0">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Similar items</h5>
                        <div class="d-flex mb-3">
                          <a href="#" class="me-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                          </a>
                          <div class="info">
                            <a href="#" class="nav-link mb-1">
                              Rucksack Backpack Large <br />
                              Line Mounts
                            </a>
                            <strong class="text-dark"> $38.90</strong>
                          </div>
                        </div>

                        <div class="d-flex mb-3">
                          <a href="#" class="me-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/9.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                          </a>
                          <div class="info">
                            <a href="#" class="nav-link mb-1">
                              Summer New Men's Denim <br />
                              Jeans Shorts
                            </a>
                            <strong class="text-dark"> $29.50</strong>
                          </div>
                        </div>

                        <div class="d-flex mb-3">
                          <a href="#" class="me-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                          </a>
                          <div class="info">
                            <a href="#" class="nav-link mb-1"> T-shirts with multiple colors, for men and lady </a>
                            <strong class="text-dark"> $120.00</strong>
                          </div>
                        </div>

                        <div class="d-flex">
                          <a href="#" class="me-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/11.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                          </a>
                          <div class="info">
                            <a href="#" class="nav-link mb-1"> Blazer Suit Dress Jacket for Men, Blue color </a>
                            <strong class="text-dark"> $339.90</strong>
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
    <script>
        $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });

});
    </script>
</body>

</html>
