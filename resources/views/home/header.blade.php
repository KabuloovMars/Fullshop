<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="index.html">Footwear</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                <form action="#" class="search-wrap">
                   <div class="form-group">
                      <input type="search" class="form-control search" placeholder="Search">
                      <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                   </div>
                </form>
             </div>
         </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href=/dash>Home</a></li>
                        <li class="has-dropdown">
                            <a href="men.html">Men</a>
                            <ul class="dropdown">
                                <li><a href="product-detail.html">Product Detail</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-complete.html">Order Complete</a></li>
                                <li><a href="add-to-wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="women.html">Women</a></li>
                        <li><a href="about.html">About</a></li>
                        <li ><a href="contact.html">Contact</a></li>


                        @if (Route::has('login'))
                        @auth

                        <li class="cart" >

                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            <li class="cart"><a href="{{ route('IndexCart') }}"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                            <li class="cart"><a href="{{ route('ViewSave') }}"><i class="icon-shopping-cart"></i> Save</a></li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                              </svg>
                                        {{-- {{ Auth::user()->name}} --}}
                                    </h2>
                            <x-app-layout>

                            </x-app-layout>
                        </li>
                        @else
                        <li class="cart" ><a href="{{ route('register') }}">SIGN-UP</a>  </li>
                        <li class="cart" ><a href="{{ route('login') }}">LOGIN</a>  </li>


                        @endauth

                        @endif


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sale">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                    <div class="row">
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
