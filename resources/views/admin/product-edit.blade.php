<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <base href="/public">
  @include('admin.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.nav')
      <div class="main-sidebar sidebar-style-2">
       @include('admin.sidebar')
      </div>
      <!-- Main Content -->
<div class="main-content">
    @if (Session::has('message'))

    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{-- <button type="button" class="btn-close" data-dismiss="alert" aria-label="close">&times;</button> --}}
        <strong>{{session()->get('message')}}</strong>
    </div>
    @endif
    <section class="section">
        <div class="section-body">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                      <h4>Product Edit</h4>
                    </div>
                    <form action="{{route('productUpdate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                          <label>Category</label>
                          <select name="category" class="form-control">
                            @foreach ($categories as $category)
                            <option $value = "{{$category->name}}" >{{$category->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <input type="hidden" value="{{$product->id}}" name="id">
                      <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="{{$product->name}}" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control">{{$product->desc}}</textarea>
                      </div>
                      <div class="form-group">
                        <label>Price</label>
                        <input name="price" value="{{$product->price}}" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Discount Price</label>
                        <input name="discount_price" value="{{$product->discount_price}}" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Quantity</label>
                        <input name="quantity" value="{{$product->quantity}}" type="text" class="form-control">
                      </div>
                      {{-- <div class="form-group">
                        <label>Product Image</label>
                        <input name="img" type="file" class="form-control">
                      </div> --}}
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>

</div>
</div>
</section>
@include('admin.footer')
</div>
  <!-- General JS Scripts -->

  @include('admin.js')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
