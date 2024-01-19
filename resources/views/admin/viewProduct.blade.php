<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            {{-- navbar --}}
            @include('admin.nav')
            {{-- sidebar --}}
            @include('admin.sidebar')
            <!-- Main Content -->

            <div class="main-content">
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session()->get('message') }}</strong>
                </div>
            @endif
                <section class="section">
                    <div class="section-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h4>Products table</h4>
                                    <div class="card-header-form">
                                      <form action="{{ route('searchProduct') }}" method="GET">
                                        <div class="input-group">
                                          <input type="text" name="search" class="form-control" placeholder="Search">
                                          <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                  <div class="card-body p-0">
                                    <div class="table-responsive">
                                      <table class="table table-striped">
                                        <tr>

                                          <th>Category</th>
                                          <th>Product name</th>
                                          <th>img</th>
                                          <th>Price</th>
                                          <th>Discount Price</th>
                                          <th>Quantity</th>
                                          <th>Description</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                        </tr>
                                        @foreach ($products as $product )

                                        <tr>

                                        <td>{{ $product->category }}</td>

                                          <td>{{ $product->name }}</td>
                                          <td>
                                            <img alt="image" src="storage/product-img/{{ $product->img }}" class="" width="80"
                                              data-toggle="tooltip" title="Wildan Ahdian">
                                          </td>
                                          <td>{{ $product->price }}</td>
                                          <td>{{ $product->discount_price }}</td>

                                          <td>{{ $product->quantity }}</td>
                                          <td>{{ $product->desc }}</td>
                                          <td>
                                           <a href={{ route('productEdit',$product->id) }} class="btn btn-primary " >Edit</a>
                                          </td>
                                          <td><a href="{{ route('productDelete',$product->id) }}" class="btn btn-danger">Delete</a></td>
                                        </tr>

                                        @endforeach




                                    </table>
                                </div>
                            </div>
                            {{-- {{ $products->links() }} --}}
                                </div>
                              </div>


                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>


    {{-- footer --}}


    @include('admin.footer')
    </div>
    </div>
    </div>
    {{-- Js --}}
    @include('admin.js')
</body>

</html>
