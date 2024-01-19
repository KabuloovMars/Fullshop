<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
      </svg>
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

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($products as $product )
            <div class="col-lg-3 mb-4 text-center">

                <div class="product-entry border">
                    <a href="{{ route('productDesc' ,$product->id)}}" class="prod-img">
                        <img src="storage/product-img/{{$product->img  }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>

                    <div class="desc">
                        <h2><a href="#">{{ $product->name }}</a></h2>
                        @if ($product->discount_price==NULL)
                        <span  class="price">${{ $product->price }}</span>
                        @else
                        <del>  <span  class="price">${{ $product->price }}</span></del>
                        <span class="price">${{ $product->discount_price }}</span>

                        @endif
                    </div>
                    <a href="{{ route('productDesc',$product->id) }}" class="btn btn-success" >View</a>
                    <a href="{{ route('SaveProduct',$product->id) }}" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
                </div>

            </div>
            @endforeach

            <h2>{{ $products->links() }}</h2>
            {{-- <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Minam Meaghan</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Men's Taja Commissioner</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Russ Men's Sneakers</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-5.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-6.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-7.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-8.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-9.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-10.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-11.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-12.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-13.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-14.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-15.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="home/images/item-16.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">Women's Boots Shoes Maca</a></h2>
                        <span class="price">$139.00</span>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
