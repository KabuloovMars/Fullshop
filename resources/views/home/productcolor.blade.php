<div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url(home/images/men.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Men's Collection</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img" style="background-image: url(home/images/women.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Women's Collection</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="row row-pb-md">

            @foreach ($products as $product)
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="#" class="prod-img">
                        <img src="storage/product-img/{{ $product->img }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">

                        <h2><a href="#">{{ $product->name }}</a></h2>
                        @if($product->discount_price == NULL)
                        <span class="price">{{ $product->price}}</span>
                        @else
                        <del><span class="price">{{ $product->price}}</span></del>
                        <span class="price">{{ $product->discount_price}}</span>



                        @endif
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-3 mb-4 text-center">
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
