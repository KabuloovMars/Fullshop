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

</head>

<body>
    <base href="/public">

    <div class="colorlib-loader"></div>

    <div id="page">
        @include('home.header')

        <section class="py-5">
            <div class="container">
              <div class="row gx-5">
                <aside class="col-lg-4">
                  {{-- <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                      <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="storage/product-img/{{ $product->img }}" />
                    </a>
                  </div> --}}
                  {{-- <div class="d-flex justify-content-center mb-3">
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
                  </div> --}}
                  <!-- thumbs-wrap.// -->
                  <!-- gallery-wrap .end// -->

                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <div class="row mb-4">
                            @foreach ($saves  as $save)

                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('productDescription' ,$save->id) }}"><img src="storage/product-img/{{ $save->img }}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $save->name }}</h5>
                                    <p class="card-text">${{ $save->price }}</p>
                                    <p class="card-text">{{ $save->quantity }}</p>
                                <a href="{{ route('deletesave',$save->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg></a>
                                </div>
                            </div>

                            @endforeach
                            <!-- col.// -->
                            <div class="col-md-4 col-6 mb-3">
                                {{-- <label class="mb-2 d-block">Quantity</label> --}}

                                {{-- <form action="{{ route('addToCart',$product->id) }}" method="post"> --}}
                                    {{-- @csrf --}}
                                    {{-- <div class="input-group">
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
                </div> --}}
            </div>
            {{-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
            <a href="{{ route('SaveProduct',$product->id) }}" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a> --}}
        </div>
    </main>
              </div>
            </div>
          </section>
          <!-- content -->




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
