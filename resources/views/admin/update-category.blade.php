<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Category</h4>
                        </div>
                        <form action="{{ route('updateCategory') }}" method="post">
                            @csrf
                        <div class="card-body ">
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control ">
                            </div>
                            <input type="hidden" name="id" value="{{ $category->id }}" >

                            <div class="input-group-append">
                                <button  class="btn btn-primary" type="submit">Button</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

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
