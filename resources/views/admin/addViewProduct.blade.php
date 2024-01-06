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
                            <div class="col-12 col-md-6 col-lg-6">
                                <form action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Products add</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="category" class="form-control">
                                                @foreach ($categories as $category )

                                                <option value="{{ $category->name }}" >{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="desc" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input name="price" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Discount Price</label>
                                            <input name="discount_price" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input name="quantity" type="text" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label>Product img</label>
                                            <input name="img" type="file" class="form-control">
                                        </div>


                                    </div>

                                    <div class="card-footer text-right">
                                        <button  class="btn btn-primary mr-1" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>


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
